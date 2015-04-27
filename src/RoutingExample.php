<?php
require_once 'GearmanRouter.php';
/**
  Add the below line on your transaction processing layer
*/
$payload = array(
  "service"=>$serviceName,
  "data"=>array(),//YOUR DATA GOES HERE
);

$unique_id = date('YmdHis');

$json = json_encode($payload);
GearmanRouter::route($this->log, $unique_id,$json);
