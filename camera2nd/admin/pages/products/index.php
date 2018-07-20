<?php 
    include_once('../session.php');
    include_once('../includes/connectdb.php');
    $sql = "SELECT * FROM (products Inner Join product_types On products.product_types_id = product_types.id_type) 
            Inner Join brand On products.brand_id = brand.id_brand ORDER BY ID";
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
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
                $sql_pt = "SELECT COUNT(*) AS COUNTPT FROM products";
                $result_pt = mysqli_query($conn,$sql_pt);
                $count_pt = mysqli_fetch_assoc($result_pt);
              ?>
                <h1><?= $count_pt['COUNTPT']; ?></h1>

                <h5>Products</h5>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
                $sql_mb = "SELECT COUNT(*) AS COUNTMB FROM members";
                $result_mb = mysqli_query($conn,$sql_mb);
                $count_mb = mysqli_fetch_assoc($result_mb);
              ?>
                <h1><?= $count_mb['COUNTMB']; ?></h1>

                <h5>User Registrations</h5>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
          <!-- ./col -->
        </div>
        
      </div><!-- /.container-fluid -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">Products list</h3>
          <a href="" class="btn btn-primary float-right"  id="add" data-toggle="modal" data-target="#addModal">Add Product</a>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">รูปภาพ</th>
                <th scope="col">ราคา</th>
                <th scope="col">ประเภท</th>
                <th scope="col">แบรนด์</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
              </tr>
            </thead>
            
            <tbody>
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['name'] ?>
                <td><img src="../../dist/img/products/<?= $row['image'] ?>" class="img-thumbnail" style="width:100px;"></td>
                <td><?= number_format($row['price']) ?></td>
                <td><?= $row['name_type'] ?></td>
                <td><?= $row['name_br'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning text-white edit">
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
<?php include 'insertModal.php' ?>
  



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
      $('#insert_form').on('submit',function(e){
          e.preventDefault();
          $.ajax({
              url:"insert.php",
              method:"POST",
              data:new FormData(this),
              processData:false,
              contentType:false,
              beforeSend:function(){
                $('#insert').val("กำลังเพิ่มข้อมูล");
              },
              success:function(data){
                swal("Good job!", "You clicked the button!", "success");
                $('#insert_form').trigger('reset');
                $('#addModal').modal('hide');
              }

          });
      });

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

