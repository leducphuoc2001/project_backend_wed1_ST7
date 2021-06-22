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
}
