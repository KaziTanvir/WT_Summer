<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is empty";
}
else
{

$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];
$user = $_REQUEST["username"];
$pass = $_REQUEST["password"];
$existingdata = file_get_contents('../data/user.JSON');
$tempJSONdata = json_decode($existingdata);
    foreach($tempJSONdata as $data ){
        if($data->username == $user && $data->password){
            header("Location: ../view/dashboard.php");
            
            break;
        }
        else{
            $error = "Wrong Username or password";
        }
    }    
   }
 
}



?>