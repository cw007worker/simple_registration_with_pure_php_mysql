<?php 

session_start();

//initialising variables

$username = "";
$email = "";

$errors = array();
//connect to db

$db = mysqli_connect('localhost', 'root', '', 'practise') or die("could not connect to database");

//Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation
if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, 'Email is required');}
if(empty($password_1)) {array_push($errors, 'password_1 is required');}
if($password_1 != $password_2) {array_push($errors, 'Passwords do not match');}


























?>