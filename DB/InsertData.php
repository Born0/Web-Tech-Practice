<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BornoDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
$fname = 'alice ';
$lname = 'redd';
$email = 'alice@gmail.com';
//$sql = "INSERT INTO Users (firstname, lastname, email) VALUES (“. $fname .”, “. $lname .”, ‘”. $email .”)";
$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ( $fname , $lname ,  $email )";
$res = $conn->query($sql);//execute query
if($res)
{ echo "new record inserted"; }
else
{ echo "error occurred"; }
$conn->close();
?>