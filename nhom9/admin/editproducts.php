<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;

//Goi phuong thuc them san pham
$name = $_POST['name'];
$manu_id = $_POST['manu_id'];
$type_id = $_POST['type_id'];
$price = $_POST['price'];

$description = $_POST['description'];
$feature = $_POST['feature'];

if(isset($_FILES['fileUpload'])){
    $pro_image = $_FILES['fileUpload']['name'];
    //upload file hinh neu co
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
}
else{
    $pro_image=null;
}
$id=$_POST['id'];

$product->editProduct($name,$manu_id,$type_id,$price,$pro_image,$description,$feature,$id);

header('location:index.php');