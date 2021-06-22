<?php
session_start();
include "headerCart.php";
$id="";

if(isset($_GET['remove']))
{
    $id=$_GET['remove'];
    unset($_SESSION['cart'][$_GET['remove']]);
}

$sanpham=$product->getAllProducts();  //lấy all sản phẩm

//==============================================================

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id]+=1;
    }
    else
    {
        $_SESSION['cart'][$id]=1;
    }
}
if(isset($_SESSION['cart']))
{
    $cart = $_SESSION['cart'];
}



?>
        <section id="cart_items">
            <div class="container">
                <h3>Your shopping cart</h3>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description">Name</td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $tong =0;
                            if($_SESSION['cart']!=null)
                            {
                            foreach($sanpham as $item)
                            {
                                foreach($cart as $key => $value){
                                if($item["id"]==$key)
                                {
                                    echo "ID:".$id;
                        // var_dump($cart);
                        // var_dump($item);
                        ?>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="public/images/<?=$item['pro_image']?>'" alt=""
                                            width=110></a>
                                </td>
                                <td class="cart_description">
                                    <!-- <input type="text" name="remove" value="<?= $item['id']?>"> -->
                                    <h4><a href="detail.php?id=<?= $item['id']?>"><?= $item['name'] ?></a></h4>
                                </td>
                                <td class="cart_price">
                                    <p><?= number_format( $item['price']) ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="#"> + </a>
                                        <input class="cart_quantity_input" id="soluong" type="text" name="quantity" value="<?=$value?>"
                                            autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="#"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p><?= number_format( $item['price']) ?></p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="cart.php?remove=<?= $item['id']?>"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>

                            <?php }}}}else
                            {
                                echo "<h2 class='subtotal'>GIỎ HÀNG TRỐNG !!! </h2>";
                            } ?>
                        </tbody>
                    </table>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post"
                        action="?order=ordered">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" class="form-control" rows="3"
                                placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <a class="btn btn-default update" href="index.php">Continue Buying</a>
                            <a class="btn btn-default check_out" href="#">Delete All</a>
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Order" >
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
        <!--features_items-->
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





