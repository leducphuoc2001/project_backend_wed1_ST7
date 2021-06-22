<?php include"header.php";
$id = "";
if(isset($_GET['idmanu'])){
    $id = $_GET['idmanu']; 
}
$getManufacturesById = $manufactures->getManufacturesById($id);

?>

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Add New Manufacture</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Manufacture info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="edit_manufactures.php" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Manufacture :</label>
                                    <div class="controls">
                                        <?php foreach($getManufacturesById as $value): ?>
                                            <input type="hidden" class="span11" placeholder="Manufacture" name="id" value="<?= $value['manu_id']?>"/>
                                            <input type="text" class="span11" placeholder="Manufacture" name="name" value="<?= $value['manu_name']?>"/> *
                                        <?php endforeach ?>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Edit</button>
                                </div>
                            </form>
                            <!-- END USER FORM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php //var_dump($getManufacturesById) ?>
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