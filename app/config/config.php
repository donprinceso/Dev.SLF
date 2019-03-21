<?php
//Setting up ENV function
function env($name){
    return getenv($name);
}
/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/21/2018
 * Time: 9:27 AM
 */
define('DB_HOST','Localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB__NAME','');

// Define app root
define('APPROOT', dirname(dirname(__FILE__)));

// Define Site URL e.g http://localhost/kapframework
define('SITEURL', 'http://localhost/Dev.SLF');

// Define Site name
define('SITENAME', "Dev-SLF");
