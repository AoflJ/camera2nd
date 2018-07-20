<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Camera2nd</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/svg-with-js/js/fontawesome-all.js"></script>
</head>
<body>
        <!-- Section Navbar -->
        <?php include_once('includes/navbar.php') ?>
        <!-- Section Carousell -->
        <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-img" style="background-image: url('images/canon-cover.jpg')">
                     </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('images/nikon-cover.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('images/sony-cover.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('images/fuji-cover.jpg')">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>

        <article class="container my-5">
            <div class="row">
                <header class="col text-center py-4">
                   <h1 class="display-4">เลือกหมวดหมู่ของสินค้า</h1>
                </header>
            </div>

            <div class="row">
                
                <section class=" col-sm-6 col-md-4 col-lg-4 ">
                    <a href="dslr.php" style="text-decoration:none;">
                        <div class="card mb-4" style="border: 0px;">
                            <img class="card-img-top" src="images/dslr.jpg" alt="Card image cap">
                            <div class="card-body" >
                                <h3 class="card-title" style="color: black; ">DSLR</h3>
                            </div>
                        </div>
                    </a>
                </section>

                <section class=" col-sm-6 col-md-4 col-lg-4 ">
                    <a href="canonmrr.php" style="text-decoration:none;">
                        <div class="card mb-4" style="border: 0px;">
                            <img class="card-img-top" src="images/mirrorless.jpg" alt="Card image cap">
                            <div class="card-body" >
                                <h3 class="card-title" style="color: black; ">Mirrorless</h3>
                            </div>
                        </div>
                    </a>
                </section>
    

                <section class=" col-sm-6 col-md-4 col-lg-4 ">
                    <a href="canonlen.php" style="text-decoration:none;">
                        <div class="card mb-4" style="border: 0px;">
                            <img class="card-img-top" src="images/lens.JPG" alt="Card image cap">
                            <div class="card-body" >
                                <h3 class="card-title" style="color: black; ">Lens</h3>
                            </div>
                        </div>
                    </a>
                </section>
        

                <section class=" col-sm-6 col-md-4 col-lg-4 ">
                    <a href="tripods.php" style="text-decoration:none;">
                        <div class="card mb-4" style="border: 0px;">
                            <img class="card-img-top" src="images/tripods.jpg" alt="Card image cap">
                            <div class="card-body" >
                                <h3 class="card-title" style="color: black; ">Tripods</h3>
                            </div>
                        </div>
                    </a>
                </section>

            
                <section class=" col-sm-6 col-md-4 col-lg-4 ">
                    <a href="bags.php" style="text-decoration:none;">
                        <div class="card mb-4" style="border: 0px;">
                            <img class="card-img-top" src="images/bags.JPG" alt="Card image cap">
                            <div class="card-body" >
                                <h3 class="card-title" style="color: black; ">Bag</h3>
                            </div>
                        </div>
                    </a>
                </section>
                

                <section class=" col-sm-6 col-md-4 col-lg-4 ">
                    <a href="filter.php" style="text-decoration:none;">
                        <div class="card mb-4" style="border: 0px;">
                            <img class="card-img-top" src="images/fillter.JPG" alt="Card image cap">
                            <div class="card-body" >
                                <h3 class="card-title" style="color: black; ">Filter</h3>
                            </div>
                        </div>
                    </a>
                </section>


            </div>
        </article>

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
</body>
</html>