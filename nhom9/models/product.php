<?php
class Product extends Db{
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAllFeatureProducts(){
        $sql = self::$connection->prepare("SELECT * FROM `products`,manufactures,protypes 
        WHERE manufactures.manu_id=products.manu_id 
        AND protypes.type_id = products.type_id");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
     //Viet phuong thuc lay ra 3 san pham noi bat
     function getThreeFeatureProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 LIMIT 3");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra id san pham
    function getIDProduct(){
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC  LIMIT 3");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function getAllProductss($page, $perPage) { 
        // Tính số thứ tự trang bắt đầu  
        $firstLink = ($page - 1) * $perPage; 
        //Dùng LIMIT để giới hạn số lượng hiển thị 1 trang  
        $sql = self::$connection->prepare("SELECT * FROM products  LIMIT $firstLink, $perPage"); 
       // var_dump($sql); 
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
    static function searchProduct_andCreatePagination($keyword, $page, $resultsPerPage) {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE name like '%$keyword%' LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //lay tat ca san pham
    function getAllProducts(){
        $sql = self::$connection->prepare("SELECT * FROM `products`");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

       //Phuong thuc lay id san pham
       function getProductById($id) { 
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `id` = ?");
        $sql->bind_param("i",$id);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array ​ 
        
    }
}