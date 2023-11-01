<?php

class Database{
    public static $conn = null;
    public static function getconnection()
    {
        if(Database::$conn == null){
            $servername = "mysql.selfmade.ninja";
            $username = "gopal";
            $password = "12345678";
            $dbname = "gopal_newdb";
            
            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
              die("Connection failed: " . $connection->connect_error);
            }else{
                Database::$conn=$connection;
                return Database::$conn;
            }
        }else {
            return Database::$conn;
        }

    }

}