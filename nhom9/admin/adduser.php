<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;

$username = $_POST['user_name'];
$password = $_POST['user_password'];
$role = $_POST['role_id'];
$user->addUser($$username,$password,$role);
header('location:users.php');