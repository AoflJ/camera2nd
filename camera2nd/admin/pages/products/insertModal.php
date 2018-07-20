<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="insert_form">
                    <div class="card-header text-center">
                       <h3> Add Products </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <label class="mr-sm-2" for="SelectType" >ประเภทสินค้า</label>
                                    <?php
                                        $q = "SELECT * FROM product_types";
                                        $result = mysqli_query($conn,$q);
                                    ?>
                                    <select class="custom-select mr-sm-2" id="SelectType" name="product_types_id" required>
                                        <option selected>Choose...</option>
                                        <?php   while($row= mysqli_fetch_assoc($result)) { ?>
                                                <option value="<?= $row['id_type'] ?>"><?= $row['name_type']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-auto my-1">
                                    <label class="mr-sm-2" for="SelectBrand" >แบรนด์สินค้า</label>
                                    <?php
                                        $p = "SELECT * FROM brand";
                                        $result1 = mysqli_query($conn,$p);
                                    ?>
                                    <select class="custom-select mr-sm-2" id="SelectBrand" name="brand_id" required>
                                        <option selected>Choose...</option>
                                        <?php   while($row1 = mysqli_fetch_array($result1)) { ?>
                                                <option value="<?= $row1['id_brand'] ?>"><?= $row1['name_br']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="fileipload">Picture</label>
                            <input type="file" class="form-control" name="image" id="fileipload">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="เพิ่มสินค้า" id="insert">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <input type="hidden" id="hdid" name="hdid">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
