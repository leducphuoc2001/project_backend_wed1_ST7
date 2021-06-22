<?php include"header.php"; 
$getAllUser = $user->getAllUser();
?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h1>Manage User</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="formuser.php"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>User</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($getAllUser as $value): ?>
                                    <tr class="">
                                    <td><?= $value['user_id'] ?></td>
                                    <td><?= $value['user_name'] ?></td>
                                    <td><?= $value['user_password'] ?></td>
                                    <td><?= $value['user_role'] ?></td>
                                        <td>
                                        <a href="edituser.php?iduser=<?= $value['user_id']?>" class="btn btn-success btn-mini">Edit</a>
                                            <form action="" method="">
                                            <a href="delete.php?keyuser=<?= $value['user_id']?>"class="btn btn-danger btn-mini">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach ?> 
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <li class="active">1</li>
                                    <li>2</li>
                                    <li>3</li>
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