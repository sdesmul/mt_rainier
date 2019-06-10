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
        "Olive", "Black Tortoiseshell", "Playful and energetic Olive will play all day and then
        sleep with you all night. Olive is a future queen. When she 
        is a year old she will have all the proper health testing to ensure the health of the kittens",
        "December 17, 2018",
        "Female");

    $magnolia = new Adult_cat("PORTMANS Gilda", "Upcoming Queen",
        "Magnolia", "Calico", "Magnolia is a future queen that was imported from Russian to diversify our genetics.
        Magnolia loves to cuddle in bed and be around people. When she 
        is a year old she will have all the proper health testing to ensure the health of the kittens.", "June 10, 2018",
        "Female");

    $f3->set("valarie", $valarie);
    $f3->set("olive", $olive);
    $f3->set("magnolia", $magnolia);

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
$f3->route('GET /past-kittens', function ($f3) {

    $olive_kitten = new Kitten("Sold","March 17th, 2019", "Olive", "Black Tortoiseshell","The smallest of the litter Olive loves to sneak attack her brothers and show
    that just because she is small doesnt mean she cant hold her own with them", "December 17, 2018", "Female");

    $major = new Kitten("Sold","March 17th, 2019", "Major Tom", "Black","Just because Major Tom is the biggest of the litter doesnt make him a brute,
    quiet and regal. He doesnt use his size against his siblings.", "December 17, 2018", "Male");

    $remi = new Kitten("Sold","March 17th, 2019", "Remi", "Black","Remi is the middle brother. Remi can make a toy out of anything, and is the 
    first one to want to cuddle for a nice afternoon nap.", "December 17, 2018", "Male");

    $f3->set("olive_kitten", $olive_kitten);
    $f3->set("major", $major);
    $f3->set("remi", $remi);
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
$f3->route('GET /contact-us', function ($f3) {


    //display the contents of the page
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/contact.html");
    echo $view->render('views/footer.html');
});


$f3->route('POST /contact-us', function ($f3) {
    require_once('model/contact-validation.php');
    require_once('controller/controller.php');

    $contactType = array("deposit", "waitlist");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageType = $_POST['messageType'];


    echo $messageType;
    if ($messageType[0] == 'waitlist') {
        $messageType = "waitlist";
    } else {
        $messageType = "deposit";
    }


    if (isset($_POST)) {
        echo "<pre>" . print_r($_POST) . "</pre>";
        // echo "post";
        if (!validEmail($email)) {

            $f3->set("errors['email']", "Please enter a valid email");

        }
        if (!validName($name)) {
            $f3->set("errors['name']", "Please enter your full name");

        }
        if (!validMessageType($messageType[0])) {
            $f3->set("errors['messageType']", "Please enter a valid message type");
        }


        $f3->set('name', $name);
        $f3->set('email', $email);
        $f3->set('messageType', $messageType);

        //validation for contact us form
        if (validEmail($email) && validName($name) && validMessageType($messageType)) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $messageType = $_POST['messageType'];


            if (validName($name) && validEmail($email)) {
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['messageType'] = $messageType;
                $f3->set('name', $name);
                $f3->set('email', $email);
                $f3->set('messageType', $messageType);


                $type = $messageType[0];
                echo $type[0];
                //db connection
               addUser($name, $email, $messageType);
               $f3->reroute('/summary');

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

$f3->route('POST /review', function ($f3) {


    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render("views/review.html");
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