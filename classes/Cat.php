<?php

/**@Author Samantha DeSmul
 * Class Cat
 * This class represents a generic cat
 */
class Cat{
    private $_name;
    private $_color;
    private $_description;
    private $_birthday;
    private $_gender;


    /**
     * Cat constructor.
     * @param $name
     * @param $color
     * @param $description
     * @param $birthday
     * @param $gender
     */
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
     * @return string $color the color of the cat
     */
    function getColor()
    {
        return $this->_color;
    }

    /**Get the color of the cat
     * @return string $description the description of the cat
     */
    function getDescription()
    {
        return $this->_description;
    }

    /**Get the color of the cat
     * @return string $birthday the birthday of the cat
     */
    function getBirthday()
    {
        return $this->_birthday;
    }

    /**Get the color of the cat
     * @return string $gender the gender of the cat
     */
    function getGender()
    {
        return $this->_gender;
    }


    /**Set the pets name
     * @param String $name The name of the cat
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**Set the pets color
     * @param String $color the color of the cat
     */
    function setColor($color)
    {
        $this->_color = $color;
    }

    /**Set the pets name
     * @param String $description The description of the cat
     */
    function setDescription($description)
    {
        $this->_description = $description;
    }

    /**Set the pets name
     * @param String $birthday The birthday of the cat
     */
    function setBirthday($birthday)
    {
        $this->_birthday = $birthday;
    }

    /**Set the pets name
     * @param String $gender The gender of the cat
     */
    function setGender($gender)
    {
        $this->_gender = $gender;
    }

}