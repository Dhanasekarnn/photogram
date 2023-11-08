<?php
include 'libs/load.php';

$user ='gopal';
$pass ='12345678';
$result= null;

if(isset($_GET['logout'])){
    Session::destroy();
    die('session destory, login aginn <a href="test.php">login</a>');
}

if(Session::get('is_loggedin')){
    $userdata -> Session::get('session_user');
    print("welcome back,$userdata[username]");
    $result= $userdata;
}else{
    printf('No session found');
    $result=User::login($user, $pass);
if($result){
    print('login sucess');

}else{
    print('login fail');
}
}
echo <<<ds
<a href="test.php?logout">Logout</a>
ds;