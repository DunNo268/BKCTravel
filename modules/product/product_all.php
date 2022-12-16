<div style="width: 100%;">
    <img style="max-width: 100%;" src="imgs\travel\hi1.jpg">
</div>
<div style="width: 100%; display: flex;">
    <div style="width: 50%; margin: auto; text-align: center;">
        <br><br><h4>-------- Bạn đang ở trang Du Lịch --------</h4><br><br>
    </div>
</div>
<div style="width: 100%; display: flex;">
    <div style="width: 80%; margin: auto; text-align: center;">
        <div style="text-align: justify;">
            <a style="text-decoration: none;" href="index.php?page_layout=product_all"><strong>Du Lịch</strong></a> - Du Lịch BKC Travel cung cấp các <em><strong>tour Du lịch Việt Nam</strong></em>, các Sự kiện Du lịch diễn ra trong ngày. Thông qua các tour được cập nhật liên tục, du khách có thể nắm bắt thêm được nhiều chuyến đi du lịch thú vị.<br><br><hr><br>
        </div>
    </div>
</div>
<?php 
    $sql_product = "SELECT * FROM product";
    $resultAll = mysqli_query($conn, $sql_product);
    $totalRecords = mysqli_num_rows($resultAll);
?>
<div style="width: 100%; display: flex;">
    <div style="width: 80%; margin: auto; text-align: center;">
        <div class="products">
            <div class="product-list row">
                <?php
                    if(mysqli_num_rows($resultAll)) {
                        while ($row = mysqli_fetch_assoc($resultAll)) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mx-product" >
                    <div style="background: rgba(143, 151, 156, 0.6); width:340px;">
                        <a style="text-decoration: none;" href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id']; ?>">
                            <img style="display: block; max-width: 340px; max-height: 250px; width: auto; height: auto;" src="admin/images/travel/<?php echo $row['prd_image']; ?>">
                        </a>
                    </div>
                    <div style="background: rgba(143, 151, 156, 0.6); width:340px;" style="margin-top: 5px; margin-left: 0px;">
                        <strong>
                            <a style="text-decoration: none;" href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id']; ?>">
                                <?php echo $row['prd_name']; ?>
                            </a>
                        </strong><br><br>
                    </div>
                    <div style="background: rgba(143, 151, 156, 0.6); width:340px;">
                        <a style="text-decoration: none;" href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id']; ?>">
                            <p style="color: red;">
                                <?php echo number_format($row['prd_price'],0,",","."); ?>đ
                            </p><br>
                        </a>
                        <p style="text-align: left; margin-left: 20px;">
                            Thời gian : <?php echo $row['prd_time']; ?><br>
                            Ngày khởi hành : <?php echo $row['prd_start']; ?><br>
                            Phương tiện : <?php echo $row['prd_vehicle']; ?><br>
                        </p><br>
                    </div>
                    <div style="background: rgba(143, 151, 156, 0.6); width:340px;" style="margin: auto;">
                        <a class="fancybox box-book-tour" style="text-decoration: none;" href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id']; ?>">Xem thêm</a>
                    </div><br><br>
                </div>
                <?php 
                        }
                    }      
                ?>
            </div>
        </div>
    </div>
</div><br><hr>
<link rel="stylesheet" href="css/oldd.css">
