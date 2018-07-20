<?php 
    include_once('../session.php');
    include_once('../includes/connectdb.php');

    $id= $_GET['id'];

    $sql ="SELECT * FROM members WHERE id = '$id' ";
    $resmem =mysqli_query($conn,$sql);
    if (!$rowmem =mysqli_fetch_array($resmem)){
        header("Location: index.php");
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
  
</head>
body class="hold-transition sidebar-mini">
<div class="wrapper">
     <!-- Section Navbar -->
     <?php include '../includes/navbar.php'; ?>
            
     <!-- Main Sidebar Container -->
    <?php include '../includes/aside.php'; ?>   

    
    <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                        <form action="member_edit.php" method="post" enctype="multipart/form-data">
                            <div class="card-header text-center">
                                <h3>Edit member</h3>
                            </div>
                            <div class="card-body"> 
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">อีเมล</label>
                                        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value ="<?= $rowmem['email'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">ที่อยู่</label>
                                    <textarea class="form-control" id="inputAddress" rows="3" name="address" placeholder="Address"><?= $rowmem['address'] ?></textarea>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="inputPhone">เบอร์โทร</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" value ="<?= $rowmem['phone'] ?>">
                                    </div>
                                    <div class="col">
                                        <label for="inputPhone">สถานะ</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="name" id="inlineRadio1" value="admin">
                                                <label class="form-check-label" for="inlineRadio1">admin</label>
                
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="name" id="inlineRadio2" value="member">
                                                <label class="form-check-label" for="inlineRadio1">member</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <input type="submit" name="submit" class="btn btn-primary" value="แก้ไขข้อมูล">
                                <input type="hidden" name="hdid" value="<?= $rowmem['id'] ?>">
                            </div>
                                
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    
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
<script>
    function myFunction() {
        document.getElementById("inputAddress").value = "<?= $rowmem['address'] ?>";
    }
</script>
</body>
</html>
            
        

