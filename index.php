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
require_once('vendor/autoload.php');

// create an instance of the base class
$f3 = Base::instance();

// Turn on Fat-free error reporting
$f3->set('DEBUG', 3);

// require validation file
require_once('model/contact-validation.php');

//homepage
$f3->route('GET /', function () {
    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/home_page.html");
    echo $view->render('views/footer.html');
});

//sphynx queen page
$f3->route('GET /sphynx-queens', function ($f3) {

    $valarie = new Adult_cat("PEARLHEARTS Valarie", "Current Queen",
        "Valarie", "Seal Sepia", "Valarie is the Sphynx that started it all. She is the Queen of
         the house, she is well adjusted and very afsfectionate", "February 18, 2017",
        "Female");


    $olive = new Adult_cat("MTRAINIER Olive", "Upcoming Queen",
        "Olive", "Black Tortoiseshell", "Olive is a future queen. When she 
        is a year old she will have all the proper health testing to ensure the health of the kittens",
        "December 17, 2018",
        "Female");

    $f3->set("valarie", $valarie);
    $f3->set("olive", $olive);

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/sphynx_queens.html");
    echo $view->render('views/footer.html');

});

//sphynx queen page
$f3->route('GET /sphynx-kings', function () {

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/sphynx_kings.html");
    echo $view->render('views/footer.html');

});


//sphynx queen page
$f3->route('GET /sphynx-kittens', function () {

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/sphynx_kittens.html");
    echo $view->render('views/footer.html');

});

//sphynx queen page
$f3->route('GET /past-kittens', function () {

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/past_kittens.html");
    echo $view->render('views/footer.html');

});


//kitten application
$f3->route('GET /application', function () {

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/application.html");
    echo $view->render('views/footer.html');

});


//contact us page
$f3->route('GET|POST /contact-us', function ($f3) {

    $contactType = array("deposit", "waitlist");
    $name = '';
    $email = '';
    $messageType = '';

    $f3->set('name', $name);
    $f3->set('email', $email);
    $f3->set('messageType', $messageType);


    if (isset($_POST)) {
       // echo "<pre>" . print_r($_POST) . "</pre>";
       // echo "post";

        //validation for contact us form
        if (validEmail($email) && validName($name) && validMessageType($messageType)) {

            $f3->set("errors['email']", '');
            $f3->set("errors['name']", '');
            $name = $_POST['name'];
            $email = $_POST['email'];
            $messageType = $_POST['messageType'];


            if (validName($name) && validEmail($email)) {
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['messageType'] = $messageType;
                $f3->set('name', $name);
                $f3->set('email', $email);
                $f3->set('messageType[]', $messageType);

                echo "Success submission";

//db connection
                $DBobject = new Controller();
                $conn = $DBobject->connect();
//                $f3->reroute('/summary');

            }
        } else {
            if (!validEmail($email)) {

                $f3->set("errors['email']", "Please enter a valid email");

            }
            if (!validName($name)) {
                $f3->set("errors['name']", "Please enter your full name");
            }
            if (!validMessageType($messageType[0])) {
                $f3->set("errors['messageType']", "Please enter a valid message type");
            }
        }
    }


    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/contact.html");
    echo $view->render('views/footer.html');

});

//care
$f3->route('GET /care', function () {

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/care.html");
    echo $view->render('views/footer.html');

});

//care
$f3->route('GET /summary', function () {

    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/care.html");
    echo $view->render('views/footer.html');

});


// Run Fat-Free
$f3->run();