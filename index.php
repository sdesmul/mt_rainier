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
    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/home_page.html");
    echo $view->render('views/footer.html');
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

//sphynx queen page
$f3->route('GET /sphynx-kings', function()
{

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/sphynx_kings.html");
    echo $view->render('views/footer.html');

});


//sphynx queen page
$f3->route('GET /sphynx-kittens', function()
{

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/sphynx_kittens.html");
    echo $view->render('views/footer.html');

});

//sphynx queen page
$f3->route('GET /past-kittens', function()
{

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/past_kittens.html");
    echo $view->render('views/footer.html');

});



//kitten application
$f3->route('GET /application', function()
{

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/application.html");
    echo $view->render('views/footer.html');

});

//sphynx queen page
$f3->route('GET /contact-us', function()
{

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/contact.html");
    echo $view->render('views/footer.html');

});

//care
$f3->route('GET /care', function()
{

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/care.html");
    echo $view->render('views/footer.html');

});



// Run Fat-Free
$f3->run();