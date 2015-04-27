<?php

/**
 * This file is a worker that processes Gearman Requests from any Service Layer.
 * Used for synchronous processing of requests.
 *
 * PHP VERSION 5.3.6
 *
 * @category  Utils
 * @package   Service Layer
 * @author    Kim Kiogora   <kimkiogora@gmail.com>
 * @copyright 2015 Kim Kiogora
 * @license   Proprietory License
 * @link      https://github.com/kimkiogora
 */

class Config {
    /**
     * Info Log path
     */
    const INFO_LOG_PATH="/var/log/Gearman/info.log";
    
    const ERROR_LOG_PATH="/var/log/Gearman/error.log";
}
