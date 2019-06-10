<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 6/3/2019
 * Time: 1:13 PM
 * This is validaton for the contact page
 */

/**
 * checks to see that a email is valid
 * @param of the user
 * @return bool true if a valid name
 */
function validName($name)
{

    if (!empty($name)) {
        return true;
    }
    return false;

}


function validEmail($email)
{
    //are there 11 numbers? no nothing else
    if (!empty($email)) {
        return true;
    }
    return false;
}

/**
 * checks each selected contactType against a list of valid
 * option
 * @param $contactType
 * @return bool
 */
function validMessageType($contactType)
{
    if (isset($contactType)) {
        return true;
    }
    return false;
}