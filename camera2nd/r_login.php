<?php
    include_once('includes/connectdb.php');

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $salt ='tijsasfnhotwa43ns27anb';
    $hash_password = hash_hmac('sha256',$password,$salt);

    $sql = "SELECT * FROM members WHERE email=? AND password=?";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"ss", $email,$hash_password);
    mysqli_execute($stmt);
    $result_user = mysqli_stmt_get_result($stmt);
    if($result_user->num_rows == 1){
        session_start();
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $_SESSION['id'] = $row_user['id'];
        $_SESSION['name'] = $row_user['email'];
        $_SESSION['admin'] = $row_user['status'];
        header("Location: index.php");
    } else {
        echo "Invalid User ID or Password. Please try again";
        
    }
?>