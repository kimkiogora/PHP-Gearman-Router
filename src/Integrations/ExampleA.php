<?php

/**
 * This file is a worker that processes Gearman Requests from any Services Layer.
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
class ExampleA {

    /**
     * Empty
     */
    function __construct() {
    }

    /**
     * Process transactions.
     * @param type $data
     */
    public function process($data) {
        $content = json_decode($data[0], true);
        

        /**
         * Add processing functionality here, such as send to external
         * third-party
         */
        
        /**
         * Close the transaction for example by updating the transaction 
         * in the database. 
         */
        
    }
}
