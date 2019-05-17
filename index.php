<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 4/8/2019
 * Time: 2:16 PM
 */

// Start seesion
session_start();

// Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

//require autoload file
require_once ('vendor/autoload.php');

// create an instance of the base class
$f3 = Base::instance();

// Turn on Fat-free error reporting
$f3->set('DEBUG', 3);


// require validation file
require_once('model/validation-functions.php');


//homepage
$f3->route('GET /', function()
{
    $view = new Template();
    echo $view->render("views/home_page.html");
});


// Run Fat-Free
$f3->run();
