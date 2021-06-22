<?php
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product();

$getAllProducts = $product->getAllProducts();

if(isset($_GET['id'])){
  $id = $_GET['id'];
  if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]+=1;
  }else{
    $_SESSION['cart'][$id]=1;
  }
}
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <?php
    foreach($getAllProducts as $value):
   ?>
  <div class="product">
    <div class="product-image">
      <img src="public/images/<?= $value['pro_image'] ?>">
    </div>
    <div class="product-details">
      <div class="product-title"><?= $value['name'] ?></div>
      <p class="product-description"><?= substr( $value['description'],0,100)?>...</p>
    </div>
    <div class="product-price"><?= $value['price'] ?> VND</div>
    <div class="product-quantity">
      <input type="number" value="$_SESSION['cart]" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price"><?= $value['price'] ?> * </div>
  </div>
  <?php endforeach ?>
  

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>
</body>
</html>