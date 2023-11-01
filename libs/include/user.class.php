<?php


class User{
    public static function signup($user, $pass, $email, $phone){
        $conn= Database::getconnection();
          
          $sql="INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `active`)
          VALUES ('$user', '$pass', '$email', '$phone','1');";
          $error = false;
              
              if ($conn->query($sql) === true) {
                $error = false;
              } else {
                $error = $conn->error;
              }
              
            
              return $error;
          }

}