<?php
class database{
    

    public function __construct()
    {
    
        $servername = "piyush.com";
        $usernme = "root";
        $passwrd = "Piyush@555";
        $dbname="resume";
        $this->conn = new mysqli($servername, $usernme, $passwrd, $dbname);
        if ($this->conn->connect_error) {
           die("Connection failed: " . $this->conn->connect_error);
        }
        
    }
    public function inser_into_db($username, $passward){
        $sql = "INSERT INTO login (username, passward)
        VALUES ('$username', ' $passward')";
        if ($this->conn->query($sql) === TRUE) {
          echo "New record created successfully";
        }
        else {
      echo "Error: " . $sql . "<br>" . $this->conn->error;  
      } 
    }
    public function closeconnection(){
        $this->conn->close();

    }
}