<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 6/4/2019
 * Time: 8:59 PM
 */

//make SQL calls o load UI
require_once 'classes/Database.php';

 $databaseObject = new Database();

function addUser($names, $email, $messageType)
{
    global $databaseObject;
    $conn = $databaseObject->connect();

    $sql = "insert into mtRainierDB (name,email,messageType) values (:name, :email, :messageType)";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':messageType', $messageType, PDO::PARAM_STR);

    $statement->execute();
}


