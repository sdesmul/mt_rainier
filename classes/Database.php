<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 6/8/2019
 * Time: 11:24 PM
 */

require '/home/sdesmulc/config.php';

/**@Author Samantha DeSmul
 * Class Database
 * This is the database class for my project
 */
class Database
{

    /**
     * Database constructor.
     * Empty constructor
     */
    public function __construct()
    {

    }

    /**
     * @return PDO|void Creates a DB connection to sdesmul database.
     */
    function connect()
    {
        try {
            //instantiate a database object
            $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_PERSISTENT, true);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
     * @param $conn Database object
     * @return array List of member details
     */
    function displayMembers($conn)
    {
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