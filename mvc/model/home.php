<?php
class homeModel{
    /**
     * This is connection object.
     */
    public $conn;
    function __construct(){
        $this->conn= new mysqli('piyush.com', 'root', 'Piyush@555', 'movieS');

    }
    function home(){
        $sql = "SELECT title, genre, director FROM movies WHERE director='todd'";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo $row["title"] . $row["genre"]. " " . $row["director"]. "<br>";
            }
    }
    
}