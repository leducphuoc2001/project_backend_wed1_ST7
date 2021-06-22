<?php
class Protypes extends Db{
    function getTypeName(){
        $sql = self::$connection->prepare("SELECT * FROM `protypes` ");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getSanPham(){
        $sql = self::$connection->prepare("SELECT * FROM `products`,protypes
        WHERE products.type_id = protypes.type_id");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Viet phuong thuc lay ra tat ca san pham phan trang
    function getAllProtypes($page, $perPage) { 
        // Tính số thứ tự trang bắt đầu  
        $firstLink = ($page - 1) * $perPage; 
        $sql = self::$connection->prepare("SELECT * FROM protypes ORDER BY `protypes`.`type_id` ASC LIMIT $firstLink,$perPage"); 
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
    function deleteProtypesById($key) { 
        $sql = self::$connection->prepare("DELETE FROM protypes WHERE `type_id` = ?");
        $sql->bind_param("i",$key);
        return $sql->execute();
    }
    //Kiem tra 
    function KiemTraExit($key){
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE products.type_id LIKE ?");
        $key = "%".$key."%";
        $sql->bind_param("i",$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if($items !=null){
            return true;
        }
        return false;
    }

    //ham them loai san pham
    function addProtypes($key) { 
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`) VALUES (?)");
        $sql->bind_param("s",$key);
        return $sql->execute();
    }

    function getProtypesById($id){
        $sql = self::$connection->prepare("SELECT * FROM `protypes` WHERE `type_id` = ?");
        $sql->bind_param("i",$id);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function editProtypes($name,$id) { 
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name`= ? WHERE `type_id`= ?");
        $sql->bind_param("si",$name,$id);
        return $sql->execute();
    }
}

    