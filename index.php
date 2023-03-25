<?php 

/**
 * Entry points for your application
 * ---------------------------------
 */

use App\Support\BasicCalculation;

require_once 'App/init.php';

/**
 * App Example
 */
$appBasicCalculation = new BasicCalculation();
var_dump($appBasicCalculation);