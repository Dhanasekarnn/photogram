<?php 

include_once 'include/mic.class.php';
include_once 'include/user.class.php';
include_once 'include/database.class.php';
include_once 'include/session.class.php';

Session::start();

function load_template($name){

    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";

}

function validate($username, $password){
    if ($username=='ds@ma.com' and $password== 'ds'){
        return true;
    } else{
        return false;
    }
}
        
?>

