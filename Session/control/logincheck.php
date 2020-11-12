<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
  else
{
$username=$_POST['username'];
$password=$_POST['password'];


$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
   }
   
 


}



?>
