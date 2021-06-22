<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufactures.php";
require "models/protypes.php";
require "models/user.php";
$product = new Product;
$manufactures = new Manufactures;
$protypes = new Protypes;
$user = new User;

if(isset($_GET['id'])){
    $id =$_GET['id'];
    //goi phuong thuc xoa id
    $product->deleteProductById($id);
    header('location:index.php');
}
elseif(isset($_GET['keymanu']) && $manufactures->KiemTraExit($_GET['keymanu'])==false){
    $id =$_GET['keymanu'];
    //goi phuong thuc xoa id
    $manufactures->deleteManufacturesById($id);
    header('location:manufactures.php');
}
elseif(isset($_GET['keytype'])&& $protypes->KiemTraExit($_GET['keytype'])==false){
    $id =$_GET['keytype'];
    //goi phuong thuc xoa id
    $protypes->deleteProtypesById($id);
    header('location:protypes.php');
}
elseif(isset($_GET['keyuser'])&& $user->KiemTraExit($_GET['keyuser'])==false){
    $id =$_GET['keyuser'];
    //goi phuong thuc xoa id
    $user->deleteUserById($id);
    header('location:users.php');
}