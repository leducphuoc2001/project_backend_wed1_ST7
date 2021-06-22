<?php include"header.php";
$id = "";
if(isset($_GET['idtype'])){
    $id = $_GET['idtype']; 
}
$getProtypesById = $protypes->getProtypesById($id);
?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Add New Protypes</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Protypes info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="edit_protypes.php" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Protypes :</label>
                                    <div class="controls">
                                        <?php foreach($getProtypesById as $value):?>
                                            <input type="hidden" class="span11" placeholder="Protypes" name="id" value="<?= $value['type_id'] ?>"/>
                                        <input type="text" class="span11" placeholder="Protypes" name="name" value="<?= $value['type_name'] ?>"/> *
                                        <?php endforeach?>
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