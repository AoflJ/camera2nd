<?php 
    session_start(); 
    include_once('includes/connectdb.php');

    $id = $_POST['id'];
    $sql = "SELECT * From products Where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<section class="container">
        <div>
            <h3><?= $row['name'] ?> </h3>
        </div>
        <div class="row">
            <div class="col-md-6" >              
                <img src="admin/dist/img/products/<?= $row['image'] ?>" style= "width:350px;">
            </div>  
            <div class="col-md-6">
                <h3>ราคา</h3>
                <h3><?= number_format($row['price'])  ?> บาท</h3> 
                <p>สนใจสินค้าติดต่อ</p>
                <p>
                    <i class="fas fa-phone-square fa-2x" ></i>    099-999-9999<br>
                    <i class="fas fa-envelope-square fa-2x"></i>     email@example.com<br>
                    <i class="fab fa-facebook-square fa-2x"></i>      www.facebook.com<br>
                    <i class="fab fa-line fa-2x"></i>     lin@...<br> 
                </p>
            </div>
        </div>   
</section>