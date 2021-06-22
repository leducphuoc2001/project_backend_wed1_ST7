<?php include"header.php"; 
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
}
// hiển thị 5 sản phẩm trên 1 trang
$perPage = 5;
//Tính tổng số dòng
$total = count($product->getAllFeatureProducts());
// lấy đường dẫn đến file hiện hành
$url = $_SERVER['PHP_SELF'];
$getAllProducts = $product->getAllProductss($page,$perPage);
//tìm kiếm
$key = "";
if (isset($_GET['key'])){
     $key = $_GET['key'];
     $getAllProducts = $product->getAllSearchProduct($key);
}

?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h1>Manage Products</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="form.php"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Manufactures</th>
                                        <th>Product type</th>
                                        <th>Description</th>
                                        <th>Price (VND)</th>
                                        <th>Feature</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($getAllProducts as $value): ?>
                                    <tr class="">
                                        <td width="250"><img
                                                src="../public/images/<?= $value['pro_image']?>" />
                                        </td>
                                        <td><?= $value['name']?></td>
                                        <td><?= $value['manu_name']?></td>
                                        <td><?= $value['type_name']?></td>
                                        <td><?= substr( $value['description'],0,100)?>...</td>
                                        <td><?= number_format( $value['price'])?></td>
                                        <td><?= $value['feature']?></td>
                                        <td><?= $value['created_at']?></td>
                                        <td>
                                            <a href="formedit.php?id=<?= $value['id']?>" class="btn btn-success btn-mini">Edit</a>
                                            <a href="delete.php?id=<?= $value['id'] ?>" class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>                            
                            <div class= "row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <?= $product->paginate($url, $total, $page, $perPage) ?>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
    </div>
    <!--end-Footer-part-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.tables.js"></script>
</body>

</html>