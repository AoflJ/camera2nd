<?php
    if(isset($_POST['submit'])){
    
        include_once('../includes/connectdb.php');
        $name = strtoupper($_POST['name']);
        $price = $_POST['price'];
        $type = $_POST['product_types_id'];
        $brand = $_POST['brand_id'];
        $id = $_POST['hdid'];

        $filename = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
        $newName  ='img_'.uniqid().".".$filename;
        $image_path ="../../dist/img/products/";
        $upload_path =$image_path.$newName;

        #upload

        $success =move_uploaded_file($_FILES['image']['tmp_name'],$upload_path);

        if(!$success){
            echo "ERROR!";
            exit();
        }

        $image = $newName;


        $sql = "UPDATE products SET name='$name',price='$price',product_types_id='$type',brand_id='$brand',image='$image' WHERE id=' $id' ";
    
        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("Location:index.php");
        } else {
            echo "error".mysqli_error($conn);
        }
        
    
    } else {
       header("Location: index.php");
    }
    exit();

       


?>