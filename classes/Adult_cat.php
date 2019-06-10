<?php

/**@Author Samantha DeSmul
 * Class Adult_cat
 * This cat represent a adult cat
 */
class Adult_cat extends Cat{
    private $_registeredName;
    //are they a upcoming, current, or retired adult cat
    private $_status;



    function __construct($registeredName, $status, $name,$color,$description,$birthday,$gender)
    {
        parent::__construct($name,$color,$description,$birthday,$gender);

        $this->_registeredName = $registeredName;
        $this->_status = $status;
    }



    /**Get the name of the pet
     * @return string $registeredName the registeredName of the cat
     */
    function getRegisteredName()
    {
        return $this->_registeredName;
    }

    /**Get the name of the pet
     * @return string $status the status of the cat
     */
    function getStatus()
    {
        return $this->_status;
    }



    /**Set the pets color
     * @param String $registeredName the registeredName of the cat
     */
    function setAvailable($registeredName)
    {
        $this->_registeredName = $registeredName;
    }

    /**Set the pets color
     * @param String $status the status of the pet
     */
    function setStatus($status)
    {
        $this->_status = $status;
    }
}