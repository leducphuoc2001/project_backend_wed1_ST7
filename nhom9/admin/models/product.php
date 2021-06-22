
<?php
class Product extends Db
{
    //Viet phuong thuc lay ra tat ca san pham
    function getAllFeatureProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,manufactures,protypes,user
        WHERE manufactures.manu_id=products.manu_id 
        AND protypes.type_id = products.type_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra tat ca san pham phan trang
    function getAllProductss($page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu  
        $firstLink = ($page - 1) * $perPage;
        //Dùng LIMIT để giới hạn số lượng hiển thị 1 trang  
        $sql = self::$connection->prepare("SELECT * FROM `products`,manufactures,protypes 
        WHERE manufactures.manu_id=products.manu_id AND protypes.type_id = products.type_id 
        ORDER BY `products`.`id` ASC LIMIT $firstLink,$perPage");

        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array ​    
    }
    //ham phan trang
    function paginate($url, $total, $page, $perPage)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<li><a href='$url?page=$j'> $j </a></li>";
        }
        return $link;
    }
    //viet phuong thuc xoa san pham theo id
    function deleteProductById($id)
    {
        $sql = self::$connection->prepare("DELETE  FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }

    //Phuong thuc them san pham
    function addProduct($name, $manu_id, $type_id, $price, $pro_image, $description, $feature)
    {
        $sql = self::$connection->prepare("INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, 
        `price`, `pro_image`, `description`, `feature`, `created_at`) 
        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, current_timestamp())");
        $sql->bind_param("siiissi", $name, $manu_id, $type_id, $price, $pro_image, $description, $feature);
        return $sql->execute();
    }
    //Phuong thuc lay id san pham
    function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array ​ 

    }
    //Phuong thuc sua san pham
    function editProduct($name, $manu_id, $type_id, $price, $pro_image, $description, $feature, $id)
    {
        if ($pro_image == null) {
            $sql = self::$connection->prepare("UPDATE `products` SET
            `name`=?, `manu_id`=?, `type_id`=?,`price`=?, `description`=?, `feature`=? 
            WHERE `id`=?");
            $sql->bind_param("siiisii", $name, $manu_id, $type_id, $price, $description, $feature, $id);
        } else {
            $sql = self::$connection->prepare("UPDATE `products` SET
            `name`=?, `manu_id`=?, `type_id`=?,`price`=?, `pro_image`=?, `description`=?, `feature`=? 
            WHERE `id`=?");
            $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $pro_image, $description, $feature, $id);
        }

        return $sql->execute();
    }
    // seảch sản phẩm 
    function getAllSearchProduct($name)
    {
        $sql = self::$connection->prepare(
            "SELECT * FROM `products`,manufactures,protypes,user
        WHERE manufactures.manu_id=products.manu_id 
        AND protypes.type_id = products.type_id
        AND products.name LIKE '%$name%'"
        );
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
