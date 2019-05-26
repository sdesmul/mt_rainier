<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 4/8/2019
 * Time: 2:16 PM
 */
// Start session
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
    //require the header before the contents of the page


    require_once('views/header.html');

    //display the contents of the page
    $view = new Template();
    echo $view->render("views/home_page.html");

    //require the footer after the contents of the page
    require_once('views/footer.html');
});

//sphynx queen page
$f3->route('GET /sphynx-queens', function()
{

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/sphynx_queens.html");
    echo $view->render('views/footer.html');

});


// Run Fat-Free
$f3->run();