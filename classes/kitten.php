<?php

class kitten extends cat{
    //available, pending, or sold
    private $_available;
    //When a kitten is 12 weeks old and can go
    //to there new home
    private $_goHomeDate;



    function __construct($available, $goHomeDate)
    {
        $this->__available = $available;
        $this->_goHomeDate = $goHomeDate;
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