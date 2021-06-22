<?php
class Protypes extends Db{
    function getTypeName(){
        $sql = self::$connection->prepare("SELECT * FROM `protypes`");
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
}

    