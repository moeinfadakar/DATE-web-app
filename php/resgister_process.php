<?php


 include"database.php"; 

 $lastname = $_POST["lastname"];
 $firstname = $_POST["firstname"];
 $number = $_POST["number"];
 $email = $_POST["email"];
 $username = $_POST["username"];
 $password = $_POST["password"];
 $repeatpassword = $_POST["repeatpassword"];
 $birthday = $_POST["birthday"];
 $gender = $_POST["gender"];

if($password === $repeatpassword){

$INSERT_INFORMATION = $db->query("INSERT INTO users(first_name,Last_name,User_name,password,email,birthday,mobail_number,Gender) VALUE( '$firstname','$lastname', '$username', '$password', '$email', '$birthday', '$number', '$gender')");

header("location: login.php");

}else{

   header("location: register.php");



}








?>


