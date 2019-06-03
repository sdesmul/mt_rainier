<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 6/3/2019
 * Time: 1:13 PM
 * This is validaton for the contact page
 */

function validName($name)
{

    if (!empty($name)) {
        return true;
    }
    return false;
}

/**
 * checks to see that a email is valid
 * @param $email the email of the user
 * @return bool true if a valid email
 */
function validEmail($email)
{
    //are there 11 numbers? no nothing else
    if (!empty($email)) {
        return true;
    } else {
        return false;
    }
}

/**
 * checks each selected contactType against a list of valid
 * option
 * @param $contactType
 * @return bool
 */
function validContactType($contactType, $chosenContactTypes)
{
    if (empty($chosenOutdoorActivities)) {
        return false;
    }
    foreach ($chosenContactTypes as $chosenContactType) {
        if (!in_array($chosenContactType, $contactType)) return false;
    }
    return true;
}