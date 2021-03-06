<?php 
    include_once('../session.php');
    include_once('../includes/connectdb.php');
    $sql = "SELECT * FROM members";
    $result = mysqli_query($conn,$sql);
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include '../includes/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include '../includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Members</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="container-fluid">
    
        
      </div><!-- /.container-fluid -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">Member list</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">อีเมล</th>
                <th scope="col">ที่อยู่</th>
                <th scope="col">เบอร์โทร</th>
                <th scope="col">สถานะ</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
              </tr>
            </thead>
            
            <tbody>
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['email'] ?>
                <td><?= $row['address'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td>
                  <span class="badge badge-primary"><?= $row['name'] ?></span>
                </td>
                <td>
                  <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fa fa-edit"></i> edit
                  </a> 
                </td>
                <td>
                  <button type="button" id="<?= $row['id'] ?>" class="btn btn-sm btn-danger text-white delete">
                    <i class="fa fa-trash-o"></i> Delete
                  </button>
                </td>
              </tr>
            <?php } ?>
            </tbody>
            
          </table>
        </div>
      </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->




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
<script>
$(document).ready(function(){
    $(".delete").click(function(){
        var id = $(this).attr("id");
        swal({
            title: "ต้องการที่จะลบข้อมูลนี้?",
            icon: "warning",
            buttons: true,
            dangerMode: true,  
        })
        .then((willDelete) => {
        if (willDelete) {
            $.ajax({
              url:"delete.php",
              method:"get",
              data:{id:id},
              sucess:function(data){
                location.reload();
              },
            });
            swal("ข้อมูลถูกลบเรียบร้อย", {
              icon: "success",
              timer:10000,
            }).then(function(){
              location.reload();
            });
        } else {
          swal("ยกเลิกการลบข้อมูล");
        }
        });
    });
});

</script>
</body>
</html>
