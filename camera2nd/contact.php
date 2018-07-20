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
        <!-- Section contact -->
       <section class ="container products "> 
            <div class ="row text-center">
                <div class ="col-12">
                    <h1 class ="pb-3">ข้อมูลการติดต่อ</h1> 
                </div>
                <div class="col-sm-4 mb-3">
                    <div class ="card h-100">
                        <div class ="card-body">
                            <i class="fas fa-address-card fa-4x py-2 text-info"></i>
                            <h4 class="card-title">ที่อยู่</h4>
                            <p class ="card-text">กรุงเทพมหานคร ภาษีเจริญ บางหว้า</p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4 mb-3">
                    <div class ="card h-100">
                        <div class ="card-body">
                            <i class="fas fa-phone-square fa-4x py-2 text-info" ></i>
                            <h4 class="card-title">เบอร์โทรศัพท์</h4>
                            <p class ="card-text">(+66)89-999-9999</p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4 mb-3">
                    <div class ="card h-100">
                        <div class ="card-body">
                            <i class="fas fa-envelope-square fa-4x py-2 text-info"></i>
                            <h4 class="card-title">อีเมลล์</h4>
                            <p class ="card-text">email@example.com</p>
                        </div>
                    </div>
                </div>   
            </div>   

            <div class ="row">
                <div class="col-12">
                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">แบบฟอร์มติดต่อเรา</h5>
                      
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <labe for = "name">ชื่อ</label>
                                        <input type="text" id="name" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <labe for = "phone">เบอร์โทรศัพท์</label>
                                        <input type="text" id="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <labe for = "email">อีเมลล์</label>
                                        <input type="text" id="email" class="form-control" placeholder="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for ="message"></label>
                                    <textarea id ="message" rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                                </div>  
                                <button type ="submit" class ="btn btn-primary d-block mx-auto" >ส่งข้อความ </button>     
                            </form>
                           
                        </div>
                    </div>
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
</body>
</html>