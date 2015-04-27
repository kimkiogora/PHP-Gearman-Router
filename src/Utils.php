<?php

/**
 * This file is a worker that processes Gearman Requests from any Service Layer.
 * Used for synchronous processing of requests.
 *
 * PHP VERSION 5.3.6
 *
 * @category  Utils
 * @package   Services Layer
 * @author    Kim Kiogora   <kimkiogora@gmail.com>
 * @copyright 2015          kim kiogora
 * @license   Proprietory License
 * @link      https://github.com/kimkiogora
 */
require 'Configs/config.php';
class Utils{
    
    /**
     * 
     * @param type $message
     */
    public static function log_info($message){
        Utils::writeLog(Config::INFO_LOG_PATH,
                date('Y-m-d h:i:s a')." | INFO | ".$message);
    }
    
    /**
     * 
     * @param type $message
     */
    public static function log_error($message){
        Utils::writeLog(Config::ERROR_LOG_PATH,
                date('Y-m-d h:i:s a')." | ERROR | ". $message);
    }
    
    /**
     * Open file & write log.
     * @param type $message
     */
    public static function writeLog($log_file, $message){
        $handle = fopen($log_file, "ab+");
        if($handle){
            fwrite($handle, $message);
            fwrite($handle, "\n");
            fclose($handle);
        }
    }
}
