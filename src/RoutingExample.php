<?php

/**
 * Example
 * PHP VERSION 5.3.6
 *
 * @category  Example
 * @package   Example
 * @author    Kim Kiogora   <kimkiogora@gmail.com>
 * @copyright 2015 Kim Kiogora
 * @license   Proprietory License
 * @link      https://github.com/kimkiogora
 */
require_once 'GearmanRouter.php';
/**
  * Add the below line on your transaction processing layer
*/
$payload = array(
  "service"=>"ExampleA",
  "data"=>array(),//YOUR DATA GOES HERE
);

$unique_id = date('YmdHis');

$json = json_encode($payload);
GearmanRouter::route($this->log, $unique_id,$json);
