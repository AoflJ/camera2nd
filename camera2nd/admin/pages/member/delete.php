<?php
    //    session_start(); 
   include_once('../includes/connectdb.php');;

   $id = $_GET['id'];


   $sql ="DELETE FROM members WHERE id = '$id'";

   $result = mysqli_query($conn,$sql);

//    if($result){
//        header("Location: index.php");
//    }
?>