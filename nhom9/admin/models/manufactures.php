<?php
class Manufactures extends Db{
    //Viet phuong thuc thuc lay ten hang
    function getManuName(){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures`");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getItemHang(){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures`,products
        WHERE manufactures.manu_id = products.manu_id");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Viet phuong thuc lay ra tat ca san pham phan trang
    function getAllManufactures($page, $perPage) { 
        // Tính số thứ tự trang bắt đầu  
        $firstLink = ($page - 1) * $perPage; 
        $sql = self::$connection->prepare("SELECT * FROM manufactures LIMIT $firstLink,$perPage"); 
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array ​    
    }
    //ham phan trang
    function paginate($url, $total, $page, $perPage) { 
        $totalLinks = ceil($total/$perPage); 
        $link =""; 
        for($j=1; $j <= $totalLinks ; $j++) 
        { 
            $link = $link."<li><a href='$url?page=$j'> $j </a></li>"; 
        } 
        return $link;       
    }

    //viet phuong thuc xoa san pham theo id
    function deleteManufacturesById($key) { 
        $sql = self::$connection->prepare("DELETE FROM manufactures WHERE `manu_id` = ?");
        $sql->bind_param("i",$key);
        return $sql->execute();
    }
    //Kiem tra 
    function KiemTraExit($key){
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE products.manu_id LIKE ?");
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

    //viet phuong thuc add hang 
    function addManufactures($key) { 
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`) VALUES (?)");
        $sql->bind_param("s",$key);
        return $sql->execute();
    }

    //Viet phuong thuc lay id theo hang
    function getManufacturesById($id){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE manu_id = ?");
        $sql->bind_param("i",$id);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Viet phuong thuc edit hang
    function editManufactures($name,$id) { 
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`= ? WHERE `manu_id`= ?");
        $sql->bind_param("si",$name,$id);
        return $sql->execute();
    }
}
