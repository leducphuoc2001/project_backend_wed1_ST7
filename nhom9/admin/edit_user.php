<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;

$name=$_POST['name'];
$id =$_POST['id'];

$user->editUser($name,$id);
header('location:users.php');