                <div class="row">
                    <?php while($row = mysqli_fetch_assoc($result)) {?>
                    <div class="col-12 col-md-6 col-lg-4 p-2  ">
                        <div class="card h-100" style="width: 17rem;">
                            <a href="" class="">
                            <div class="card-header">
                            <img class="card-img-top  " src="admin/dist/img/products/<?= $row['image'] ?>" alt="Card image cap" style = " height: 200px;">
                            </a>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title"><?= $row['name'] ?></h5>
                                <p class="card-text"><?= number_format($row['price'])  ?> บาท</p>
                            </div>
                                <div class="p-3 view_data" id="<?= $row['id'] ?>">
                                        <input type="button" name="view" class="btn btn-secondary btn-block view_data" value ="ดูรายละเอียด">
                                </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>     
            
            <?php require 'products.php' ?>
