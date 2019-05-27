<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 5/26/2019
 * Time: 10:10 PM
 */class adult_cat extends cat{
    private $_registeredName;
    //are they a upcoming, current, or retired adult cat
    private $_status;



    function __construct($registeredName, $status)
    {
        $this->__registeredName = $registeredName;
        $this->_status = $status;
    }



    /**Get the name of the pet
     * @return string $name the name of the pet
     */
    function getRegisteredName()
    {
        return $this->_registeredName;
    }


    /**Set the pets color
     * @param String $color the color of the pet
     */
    function setAvailable($registeredName)
    {
        $this->_registeredName = $registeredName;
    }
}