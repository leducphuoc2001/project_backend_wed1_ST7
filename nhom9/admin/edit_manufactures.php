<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";
$manufactures = new Manufactures;

$name=$_POST['name'];
$id =$_POST['id'];

$manufactures->editManufactures($name,$id);
header('location:manufactures.php');
