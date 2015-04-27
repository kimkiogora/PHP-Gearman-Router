<?php
/**
 * This file is a router to the gearman service.
 * Used for synchronous processing of requests.
 *
 * PHP VERSION 5.3.6
 *
 * @category  Utils
 * @package   Services Layer
 * @author    Kim Kiogora   <kimkiogora@gmail.com>
 * @copyright 2015 Kim Kiogora
 * @license   Proprietory License
 * @link      https://github.com/kimkiogora
 */
class GearmanRouter {
    /**
     * Receives the json encoded data and routes to specific service/function.
     * 
     * @param type $json_request
     */
    public static function route($log,$uniqueID,$json_request) {
        /**
         * Log your uinique_id or sth
         */
        $gearman_client = new GearmanClient();
        $gearman_client->addServer();
        $result = $gearman_client->doBackground("request",$json_request);
    }
}
