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
$total = count($protypes->getTypeName());
// lấy đường dẫn đến file hiện hành
$url = $_SERVER['PHP_SELF'];
$getAllProtypes = $protypes->getAllProtypes($page,$perPage);
?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h1>Manage Product Type</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="formprotypes.php"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Product type</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Type Id</th>
                                        <th>Type Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($getAllProtypes as $value): ?>
                                    <tr class="">
                                        <td><?= $value['type_id'] ?></td>
                                        <td><?= $value['type_name'] ?></td>

                                        <td>
                                            <a href="editprotypes.php?idtype=<?= $value['type_id']?>" class="btn btn-success btn-mini">Edit</a>
                                            <form action="" method="">
                                            <a href="delete.php?keytype=<?= $value['type_id']?>"class="btn btn-danger btn-mini">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <?= $product->paginate($url, $total, $page, $perPage)  ?>
                                </ul>
                            </div>
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