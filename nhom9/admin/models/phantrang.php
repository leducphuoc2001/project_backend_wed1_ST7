<?php
class PhanTrang extends Db{
    function phanTrang($page,$perpage) { 
        $url = "index.php";
        $total = 25;
        $totalLinks = ceil($total/$perpage); 
        $link =""; 
        for($j=1; $j <= $totalLinks ; $j++) 
        { 
        $link = $link."<a href='$url?page= $j'> $j </a>";   
        } 
        return $link; 
    }
 
}