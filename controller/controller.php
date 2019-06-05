<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 6/4/2019
 * Time: 8:59 PM
 */

require '/home/sdesmulc/config.php';

//make SQL calls to load UI
class Controller
{
    public function __construct()
    {
        
    }

    /**
     * @return PDO|void Create a DB connection to sdesmul database.
     */
    function connect()
    {
        try {
            //instantiate a database object
            $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_PERSISTENT, true);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected to database for Trivia Quack!";
            //return connection
            return $conn;

        } catch (PDOException $ex) {
            echo "Connection failed" . "<br>";
            echo $ex->getMessage();
            return;
        }

    }


    /**
     * This method will display members
     * @return array List of member details
     */
    function displayMembers()
    {
        global $conn;
        //define query
        $sql = "Select * from mtRainierDB ORDER by lastName";

        //preapare
        $statement = $conn->prepare($sql);

        //execute
        $statement->execute();

        //get all
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}