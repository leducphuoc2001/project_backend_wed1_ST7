<?php include "header.php"; ?>
<?php $keyword;
if(isset ($_GET['key'])){
    $keyword = $_GET['key'];
    $getSearchName = $search->getSearchName($keyword);
}
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Search Result</h2>
                        <?php foreach($getSearchName as $value):?>
                        <div class="col-sm-4">                       
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="public/images/<?= $value['pro_image'] ?>" alt="" />
                                        <h2><?= number_format($value['price'])  ?>VND</h2>
                                        <p><?= $value['name']  ?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?= number_format($value['price']) ?> VND</h2>
                                            <p><a href="detail.html?45"><?= $value['name'] ?></a></p>
                                            <a href="cart.html?45" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <?php endforeach ?>
                        </div>
                        <ul class="pagination col-sm-12">