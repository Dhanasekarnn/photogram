<?php


class User{
    public static function signup($user, $pass, $email, $phone){
      $options = [
        'cost'=> 9,
      ];
      $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
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
    
    public static function login($user, $pass){
      $query = "SELECT * FROM `auth` WHERE `username` = '$user'";
      $conn = Database::getconnection();
      $result = $conn->query($query);
      if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['password'])){
          return $row;
        }else{
          return false;
        }
      }else{
        return false;

      }
    }
 
}