<?php

/**@Author Samantha DeSmul
 * Class Kitten
 * This class represents a kitten
 */
class Kitten extends Cat{
    //available, pending, or sold
    private $_available;
    //When a kitten is 12 weeks old and can go
    //to there new home
    private $_goHomeDate;


    /**
     * Kitten constructor.
     * @param $available
     * @param $goHomeDate
     * @param $name
     * @param $color
     * @param $description
     * @param $birthday
     * @param $gender
     */
    function __construct($available, $goHomeDate, $name,$color,$description,$birthday,$gender)
    {
        parent::__construct($name,$color,$description,$birthday,$gender);

        $this->_available = $available;
        $this->_goHomeDate = $goHomeDate;
    }



    /**Get the name of the cat
     * @return string $name the name of the cat
     */
    function getAvailable()
    {
        return $this->_available;
    }

    /**Get the GoHomeDate of the cat
     * @return string $goHomeDate the go Home Date of the cat
     */
    function getGoHomeDate()
    {
        return $this->_goHomeDate;
    }



    /**Set the cat available
     * @param String $available the available of the cat
     */
    function setAvailable($available)
    {
        $this->_available = $available;
    }

    /**Get the go Home Date  of the cat
     * @return string $goHomeDate the go Home Date of the cat
     */
    function setGoHomeDate($goHomeDate)
    {
        $this->_goHomeDate = $goHomeDate;
    }


}