<?php
    include_once('includes/connectdb.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    // เข้ารหัสผ่าน
    $salt ='tijsasfnhotwa43ns27anb';
    $hash_password = hash_hmac('sha256',$password,$salt);
    
    $query ="INSERT INTO members (email,password) VALUES ('$email','$hash_password')";

    $result = mysqli_query($conn,$query);

    if($result){
        header("Location: index.php");
    }else{
        echo "เกิดข้อผิดพลาด". mysqli_errno($conn);
    }
?>