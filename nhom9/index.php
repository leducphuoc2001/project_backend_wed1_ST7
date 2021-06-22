<?php include "header.php";?>
<?php
// Lấy số trang trên thanh địa chỉ
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
}
// hiển thị 5 sản phẩm trên 1 trang
$perPage = 3;
//Tính tổng số dòng
$total = count($product->getAllFeatureProducts());
// lấy đường dẫn đến file hiện hành
$url = $_SERVER['PHP_SELF'];
$getAllProducts = $product->getAllProductss($page,$perPage);
?>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        <?php 
                            foreach($getAllProducts as $value):
                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="public/images/<?php echo $value['pro_image']?>" alt="" />
                                        <h2><?php echo number_format($value['price'])?> VND</h2>
                                        <p>
                                            </ps>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?php echo number_format($value['price'])?> VND</h2>
                                            <p><a href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a></p>
                                            <a href="cart.php?id=<?=$value['id']?>" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <div class= "row">
                        <ul class="pagination">
                            <?php echo $product->paginate($url, $total, $page, $perPage)  ?>
                        </ul>
                    </div>
                    
                </div>
                
    </section>
    <footer id="footer">
        <!--Footer-->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>