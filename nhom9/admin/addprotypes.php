<?php
require "config.php";
require "models/db.php";
require "models/protypes.php";
$protypes = new Protypes;

$key  ="";
if(isset($_POST['name'])){
    $key=$_POST['name'];
}
$protypes->addProtypes($key);
header('location:protypes.php');

