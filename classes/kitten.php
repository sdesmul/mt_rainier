<?php

class kitten extends cat{
    private $_available;



    function __construct($available)
    {
        $this->__available = $available;
    }



    /**Get the name of the pet
     * @return string $name the name of the pet
     */
    function getAvailable()
    {
        return $this->_available;
    }


    /**Set the pets color
     * @param String $color the color of the pet
     */
    function setAvailable($available)
    {
        $this->_available = $available;
    }
}