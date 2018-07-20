<?php
    //    session_start(); 
   include_once('../includes/connectdb.php');;

   $id = $_GET['id'];

   $imgdel = "SELECT image FROM products WHERE id = '$id'";
   $resdel = mysqli_query($conn,$imgdel);
   $image = mysqli_fetch_array($resdel,MYSQLI_NUM);
   $filename = $image[0]; 
   @unlink('../../dist/img/products/'.$filename);

   $sql ="DELETE FROM products WHERE id = '$id'";

   $result = mysqli_query($conn,$sql);
   if($result){
       header("Location: index.php");
   }
?>