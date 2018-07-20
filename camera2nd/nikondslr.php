<?php 
    session_start(); 
    include_once('includes/connectdb.php');
    $sql = "SELECT * From products Where (	product_types_id = '1') and (brand_id = '2')";
    $result = mysqli_query($conn,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSLR</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/svg-with-js/js/fontawesome-all.js"></script>
</head>
<body>
     <!-- Section Navbar -->
     <?php include_once('includes/navbar.php') ?>
    
    <!-- Section Products -->
    <section class="container products">
        <div class="row">
        <?php include_once('includes/l_products.php') ?>
            <div class="col-md-9">
                <h1>DSLR</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">DSLR</li>
                        <li class="breadcrumb-item active" aria-current="page">nikon</li>
                    </ol>
                </nav>
                <?php include_once('includes/r_products.php') ?>
            </div>
        </div>    
    </section>
    
    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgU18_tVZdK-nJ0iDuutPnbUsTYwE_XA&callback=initMap"></script>
    <script src="js/maim.js"></script>

    <script>
        //navbar

        $(window).scroll(function(){
            var  scrollTop =  $(this).scrollTop();
            if (scrollTop > 1){
                $('#navbar').css('padding','0 20px')  
            }else{
                $('#navbar').css('padding',' 20px')
            }
        })

    </script>
    <?php include 'modal.php'; ?>
</body>
</html>