<?php
require "config.php";
require "models/db.php";
require "models/protypes.php";
$protypes = new Protypes;

$name=$_POST['name'];
$id =$_POST['id'];

$protypes->editProtypes($name,$id);
header('location:protypes.php');
