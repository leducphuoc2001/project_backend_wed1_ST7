<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";

$user = new User();
if(isset($_POST['user']) && isset($_POST['pass'])&& isset($_POST['repass'])&& isset($_POST['email'])){
    $user_Name = $_POST['user'];
    $user_Pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $user_Email= $_POST['email']; 
    $user_role = 2;
    header("location:../admin/index.php");
    if($_POST['user']!=null && $_POST['pass']!=null && $_POST['repass']!=null && $_POST['email']!=null){
        $user_Name = $_POST['user'];
        $user_Pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $user_Email= $_POST['email'];
        $user_role = 2;       
        if($user_Pass == $repass){
            //$user_Pass = md5($user_Pass);
            $arr= $user->addUser($user_Name,$user_Pass,$user_role,$user_Email);
            header("location:../admin/index.php");
        }      
    }
}
