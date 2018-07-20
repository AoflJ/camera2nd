<?php
     if(isset($_POST['submit'])){
    
        include_once('../includes/connectdb.php');
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $id = $_POST['hdid'];


        $sql ="UPDATE members SET email='$email',address='$address',phone='$phone',name='$name' WHERE id=' $id' ";
        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("Location: index.php");
        } else {
            echo "error".mysqli_error($conn);
        }
    
     }else {
        header("Location: index.php");
     }
     exit();

?>