<?php
require "config.php";
require "models/db.php";
require "models/manufactures.php";
$manufactures = new Manufactures;

$key  ="";
if(isset($_POST['name'])){
    $key=$_POST['name'];
}
$manufactures->addManufactures($key);
header('location:manufactures.php');

