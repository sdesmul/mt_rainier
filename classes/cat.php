<?php
class cat{
    private $_name;
    private $_color;
    private $_description;
    private $_birthday;
    private $_gender;





    function __construct($name, $color, $description, $birthday, $gender)
    {
        $this->_name = $name;
        $this->_color = $color;
        $this->_description = $description;
        $this->_birthday = $birthday;
        $this->_gender = $gender;
    }



    /**Get the name of the cat
     * @return string $name the name of the cat
     */
    function getName()
    {
        return $this->_name;
    }

    /**Get the color of the cat
     * @return string $color the color of the pet
     */
    function getColor()
    {
        return $this->_color;
    }

    /**Set the pets name
     * @param String $name The name of the pet
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**Set the pets color
     * @param String $color the color of the pet
     */
    function setColor($color)
    {
        $this->_color = $color;
    }
}