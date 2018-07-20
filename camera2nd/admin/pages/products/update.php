<?php 
    include_once('../session.php'); 
    include_once('../includes/connectdb.php');

    $id= $_GET['id'];

    $sql ="SELECT * FROM products WHERE id = '$id' ";
    $respro =mysqli_query($conn,$sql);
    if (!$rowpro =mysqli_fetch_array($respro)){
        header("Location: dslr.php");
        exit();
    }

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Manager</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include '../includes/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include '../includes/aside.php'; ?>
            
        
    <!-- Section Products -->
    <div class="container products">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="card-header text-center">
                        Edit Products
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name" value ="<?= $rowpro['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control" name="price" id="exampleInputEmail1" placeholder="Price" value = "<?= $rowpro['price'] ?>">
                        </div>
                        <div class="form-group">
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">ประเภทสินค้า</label>
                                    <?php
                                        $q = "SELECT * FROM product_types";
                                        $result = mysqli_query($conn,$q);
                                    ?>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="product_types_id">
                                        <option selected>Choose...</option>
                                        <?php   while($row= mysqli_fetch_array($result)) { ?>
                                                <option <?= (($row['id_type'] == $rowpro['product_types_id'])?"selected='selected'":"" ) ?> value="<?= $row['id_type'] ?>"><?= $row['name_type']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-auto my-1">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">แบรนด์สินค้า</label>
                                    <?php
                                        $p = "SELECT * FROM brand";
                                        $result1 = mysqli_query($conn,$p);
                                    ?>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="brand_id">
                                        <option selected>Choose...</option>
                                        <?php   while($row1 = mysqli_fetch_array($result1)) { ?>
                                                <option <?= (($row1['id_brand'] == $rowpro['brand_id'])?"selected='selected'":"" ) ?> value="<?= $row1['id_brand'] ?>"><?= $row1['name_br']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="fileipload">Picture</label>
                            <input type="file" class="form-control" name="image" id="fileipload">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="แก้ไขข้อมูล">
                        <input type="hidden" name="hdid" value="<?= $rowpro['id'] ?>">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Footer -->
    <?php include '../includes/foot.php'; ?>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>