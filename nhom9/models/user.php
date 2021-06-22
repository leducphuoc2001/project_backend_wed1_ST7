<?php
    class User extends Db{       
    //Viet phuong thuc lay ra tat ca tài khoản theo username vs password
    function getAccount($username, $password){
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `user_name` = ? AND `user_password` = ?");
        $sql->bind_param("ss",$username, $password);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
     //Phuong thuc them tai khoan
     function addUser($user_name,$user_password,$user_role,$user_email){
        $sql = self::$connection->prepare("INSERT INTO `user`(`user_id`, `user_name`, `user_password`, `user_role`, `user_email`) VALUES (NULL,?,?,?,?)");
        $sql->bind_param("ssis",$user_name,$user_password,$user_role,$user_email);
        return $sql->execute();
    }   
      
}

?>