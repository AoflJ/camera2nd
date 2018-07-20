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
    <div class="container products">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                <form action="r_login.php" method="post">
                    <div class="card-header text-center">
                        Log in Your Account
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                         </div>
                         <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="Log In">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
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