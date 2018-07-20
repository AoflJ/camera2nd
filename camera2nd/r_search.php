<?php

if (isset($_POST['btnsearch'])) {
		
    $kw = $_POST['txtsearch'];
    $qs = "";
    if(strlen($kw) > 0){
        $qs = "?kw=" .$kw;
    }
    header("location:search.php" .$qs );

} else {
    header('location:index.php');
}

?>