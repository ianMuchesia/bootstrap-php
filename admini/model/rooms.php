<?php
require_once "database.php";

function add_room($name, $imageData,  $area, $guests, $quantity)
{
    global $pdo;


    $roomQuery = "INSERT INTO room(name , image, area, guests , quantity) VALUES(:name, :image, :area, :guests, :quantity)";
    $roomStatement = $pdo->prepare($roomQuery);
    $roomStatement->bindValue(':image', $imageData);
    $roomStatement->bindValue(':name', $name);
    $roomStatement->bindValue(':area', $area);
    $roomStatement->bindValue(':guests', $guests);
    $roomStatement->bindValue(':quantity', $quantity);
    $roomStatement->execute();
    $roomStatement->closeCursor();
    echo '<script>alert("Room Entered Successfully")</script>';
}



function get_all_rooms(){
    global $pdo;
    
    $query = "SELECT * FROM room";
    
    $statement = $pdo->prepare($query);
    $statement->execute();
    $rooms = $statement->fetchAll();
    $statement->closeCursor();

    return $rooms;

}