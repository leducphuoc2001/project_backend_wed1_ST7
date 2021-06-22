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
$pro_image = $_FILES['fileUpload']['name'];
$description = $_POST['description'];
$feature = $_POST['feature'];
$product->addProduct($name,$manu_id,$type_id,$price,$pro_image,$description,$feature);
//Upload hinh
$target_dir = "../images/";
if (isset($_POST["name"]) && isset($_FILES["fileUpload"]["name"])) {
    $nameFile = strtotime("now") . $_FILES["fileUpload"]["name"];
    $target_file = $target_dir . basename($nameFile);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES["fileUpload"]["size"] > 500000) {
        $message = "File quá lớn, vui lòng sử dụng file nhẹ hơn!";
        $uploadOk = 0;
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $message = "File của bạn không phải file ảnh, vui lòng chọn file khác!";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script type= 'text/javascript'>alert('$message');</script>";
        // if everything is ok, try to upload file
    } else move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);

    // if ($uploadOk == 1) {
    //     $name = $_POST['name'];
    //     $manu_id = $_POST['manu_id'];
    //     $type_id = $_POST['type_id'];
    //     $desription = $_POST['description'];
    //     $price = $_POST['price'];
    //     $feature = $_POST['feature'];
    //     $pro_image = $nameFile;
    //     $check = $product->addProduct($name,$manu_id,$type_id,$price,$pro_image,$description,$feature);
    //     if ($check) {
    //         $message = "Them thanh cong";
    //     } else {
    //         $message = "Them that bai";
    //     }
    // }
    echo "<script type= 'text/javascript'>alert('$message');</script>";
    header('location:index.php');
}
// $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
// move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
// header('location:index.php');