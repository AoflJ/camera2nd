<?php
    include_once('../includes/connectdb.php');
    require_once __DIR__ . '../../../../vendor/autoload.php';
    ob_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <?php 
            $sql_mb = "SELECT COUNT(*) AS COUNTMB FROM members";
            $result_mb = mysqli_query($conn,$sql_mb);
            $count_mb = mysqli_fetch_assoc($result_mb);
        ?>
        <br><h1 class="text-center">รายการข้อมูลลูกค้า ทั้งหมด <?= $count_mb['COUNTMB']; ?> รายการ</h1>
        
        
         
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
              <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="label label-primary"></span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
              <?php
                    $sql = "SELECT * FROM members";
                    $result = mysqli_query($conn, $sql);    
              ?>
              <table class="table table-bordered text-center">
                  <tr>
                    <th><h3>ลำดับ</h3></th>
                    <th><h3>อีเมล</h3></th>
                    <th><h3>ที่อยู่</h3></th>
                    <th><h3>เบอร์โทร</h3></th>
                    <th><h3>สถานะ</h3></th>   
                  </tr>
                  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><h4><?= $row['id'] ?><h4></td>
                    <td><h4><?= $row['email'] ?><h4></td>
                    <td><h4><?= $row['address'] ?><h4></td>
                    <td><h4><?= $row['phone'] ?><h4></td>
                    <td><h4><span><?= $row['name'] ?></span><h4></td> 
                  </tr>
                  <?php } ?>
              </table>
                
            </div><!-- /.box-body -->
            <div class="box-footer">
              
            </div><!-- box-footer -->
          </div><!-- /.box -->
          

        </section><!-- /.content -->
        
        <?php
            $html = ob_get_contents();
            ob_end_clean();
            
            $mpdf = new \Mpdf\Mpdf([
                'default_font_size' => 16,
                'default_font' => 'sarabun'
            ]);
            $mpdf->margin_header = 9;
            $mpdf->SetHeader('รายงานโดย camera2nd | รายงานลูกค้าทั้งหมด | ออกรายงานเมื่อ: '.date('d/m/Y H:i:s'));
            $mpdf->margin_footer = 9;
            $mpdf->SetFooter('หน้าที่ {PAGENO}'); 
            $stylesheet = file_get_contents('../../dist/css/printpdf.css');
            $mpdf->WriteHTML($stylesheet,1);
            $mpdf->WriteHTML($html,2);
            $mpdf->Output(time(),'I');
            
            
            exit;
        ?>
        
        
          
</body>
</html>