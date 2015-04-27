#!/usr/bin/env  php

<?php
/**
 * This file is a worker that processes Gearman Requests from any service layer.
 * Used for synchronous processing of requests.
 *
 * PHP VERSION 5.3.6
 *
 * @category  Utils
 * @package   Services
 * @author    Kim Kiogora   <kimkiogora@gmail.com>
 * @copyright 2015 Kim Kiogora
 * @license   Proprietory License
 * @link      https://github.com/kimkiogora
 */
require 'Utils.php';

$worker = new GearmanWorker();
$worker->addServer();

$worker->addFunction("request", function(GearmanJob $job) {
    $data = $job->workload();
    $workload = json_decode($data,true);
    $service = $workload['service'];
    $actual_data = json_encode($workload['data']);
    
    $DIR="Integrations/";
    $lib = $DIR.$service.".php";
    
    Utils::log_info("Service is  $service, locating processing class");
    
    if(file_exists($lib)){        
        Utils::log_info("Found processing class,auto loading...");
        
        require_once $lib;
        $className = $service;
        
        Utils::log_info("Autoloaded class, locating processing method ...");
        
        if (method_exists($className, 'process')) {
            
            Utils::log_info("Found method, sending  data $actual_data");
            
            call_user_func(array($className, 'process'), array($actual_data));
            
            Utils::log_info("Data was sent");
        } else {
            Utils::log_error("Required function process(arg data) does"
                    . " not exist");
        }
    } else {
        Utils::log_error("Service $service integration Layer does not exist");
    } 
});

//Run forever
while ($worker->work());

