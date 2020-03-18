<?php

$conex= mysqli_connect("localhost", "root", "","landing-page");

$name= $_POST["name"];
$email= $_POST["email"];
$message= $_POST["message"];

$insert = "INSERT INTO usuarios (name,email,message) VALUES ('$name','$email','$message')";
echo mysqli_query($conex, $insert);;

?>