<?php
class User extends Db{
    //Viet phuong thuc lay ra tat ca san pham phan trang
    function getAllUser() { 
        // Tính số thứ tự trang bắt đầu  
        $sql = self::$connection->prepare("SELECT * FROM user ORDER BY `user`.`user_id`"); 
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array ​    
    }
        //Viet phuong thuc lay id theo hang
        function getUserById($id){
            $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `user_id` = ?");
            $sql->bind_param("i",$id);
            $sql->execute();//return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        //Viet phuong thuc edit hang
    function editUser($name,$id) { 
        $sql = self::$connection->prepare("UPDATE `user` SET `user_name`= ? WHERE `user_id`= ?");
        $sql->bind_param("si",$name,$id);
        return $sql->execute();
    }
     //Phuong thuc them san pham
     function addUser($username,$password,$role){
        $sql = self::$connection->prepare("INSERT INTO `user` (`user_id`,`user_name`, `user_password`, `user_role`) 
        VALUES (NULL,?, ?, ?)");
        $sql->bind_param("ssi",$username,$password,$role);
        return $sql->execute();
    }   
    //viet phuong thuc xoa san pham theo id
    function deleteUserById($key) { 
        $sql = self::$connection->prepare("DELETE FROM user WHERE `user_id` = ?");
        $sql->bind_param("i",$key);
        return $sql->execute();
    }
    //Kiem tra 
    function KiemTraExit($key){
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE products.user_id LIKE ?");
        $key = "%".$key."%";
        $sql->bind_param('i',$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if($items != null){
            return true;
        }
        return false;
    }
}