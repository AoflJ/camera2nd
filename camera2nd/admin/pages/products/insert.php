<?php    
        include_once('../includes/connectdb.php');
        $id=$_POST['id'];
        $name = strtoupper($_POST['name']);
        $price = $_POST['price'];
        $type = $_POST['product_types_id'];
        $brand = $_POST['brand_id'];

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

        if($id!=''){
            $sql = "UPDATE products SET name='$name',price='$price',product_types_id='$type',brand_id='$brand',image='$image' WHERE id=' $id' ";
        }else{
            $sql = "INSERT INTO products (name,price,product_types_id,brand_id,image) 
                VALUE ('$name','$price','$type','$brand','$image') ";
        }
        
        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("Location: index.php");
        } else {
            echo "error".mysqli_error($conn);
        }
        
    
    


?>