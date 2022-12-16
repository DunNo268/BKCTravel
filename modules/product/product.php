<?php 
    if(isset($_GET['prd_id'])) {
        $prd_id = $_GET['prd_id'];
        $sql = "SELECT * FROM product WHERE prd_id=$prd_id";
        $result = mysqli_query($conn, $sql);
        $product = mysqli_fetch_assoc($result);
    }else{
        header("location: index.php");
    }
?>
<!--	List Product	-->
<div style="width: 100%; display: flex;">
    <div style="width: 80%; margin: auto; text-align: left;">
        <div id="product">
            <br><br><h3><?php echo $product['prd_name']; ?></h3><br><br>
            <div id="product-head" class="row">
                <div id="product-img">
                    <div style="width:55%; float: left;">
                        <img style="max-width: 550px; max-height: 500px; width: auto; height: auto;" src="admin/images/travel/<?php echo $product['prd_image']; ?>">
                    </div>
                    <div style="width:45%; float: left;">
                        <br><h3 style="color: red;"><?php echo $product['prd_name']; ?></h3><br>
                        <span style="margin-left: 20px; color: red;" id="price"> <?php echo number_format($product['prd_price'],0,",","."); ?>đ</span><br><br>
                        <strong style="margin-left: 20px;">Thời gian :</strong> <?php echo $product['prd_time']; ?><br><hr style="border-top: 1px dashed #8c8b8b;"><br>
                        <strong style="margin-left: 20px;">Ngày khởi hành :</strong> <?php echo $product['prd_start']; ?><br><hr style="border-top: 1px dashed #8c8b8b;"><br>
                        <strong style="margin-left: 20px;">Phương tiện :</strong> <?php echo $product['prd_vehicle']; ?><br><hr style="border-top: 1px dashed #8c8b8b;"><br>
                        <img style="max-width: 25px; max-height: 25px; width: auto; height: auto;" src="imgs/icons/hl.png"><span style="margin-left: 20px; color: green;">Hotline: 0367 791 116</span>&nbsp;&nbsp;
                        <img style="max-width: 25px; max-height: 25px; width: auto; height: auto;" src="imgs/icons/ml.png"><span style="margin-left: 20px; color: green;">Mail: bkctravel@gmail.com</span><br><br><br>
                        <div>
                            <a class="fancybox box-book-tour" style="margin-left: 140px; text-decoration: none;" href="modules/cart/process-cart.php?action=add&prd_id=<?php echo $product['prd_id']; ?>">Đặt Tour</a>
                        </div>
                        <div id="add-cartt"><a style="color: white;" href="modules/cart/process-cart.php?action=add&prd_id=<?php echo $product['prd_id']; ?>">.</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="width: 100%; display: flex;">
    <div style="width: 80%; margin: auto; text-align: left;">
        <div id="product">
            <div id="product-details">
                <br><hr style="border: none; height: 20px; width: 100%; height: 50px; border-bottom: 1px solid #1f1209; box-shadow: 0 20px 20px -20px #333; margin: -50px auto 10px;"><br><br><br>
                <h2 style="color: #0094da;">Mô tả</h2><br>
                <h3 style="text-align: center;"><?php echo $product['prd_name']; ?></h3><br>
                <h3 style="color: #0094da;">Chương trình tour du lịch:</h3>
                <?php echo $product['prd_details']; ?><br>
                <strong>Giá tour: <?php echo number_format($product['prd_price'],0,",","."); ?>VNĐ/ Người</strong><br><br>
                <h3 style="color: #0094da;">Bao gồm:</h3>
                <p>
                    - Xe du lịch chất lượng tốt đưa đón theo chương trình.<br>
                    - Bữa ăn trưa Buffet.<br>
                    - Vé thắng cảnh và thuyền thăm động theo chương trình.<br>
                    - Hướng dẫn viên thành thạo cả tiếng Anh và tiếng Việt.<br>
                    - 1 chai nước suối.
                </p><br>
                <h3 style="color: #0094da;">Không bao gồm:</h3>
                <p>
                    - Các dịch vụ khác không được đề cập đến trong chương trình.<br>
                    - Các bữa ăn & nước uống ngoài chương trình...<br>
                    - Chi phí cá nhân, bảo hiểm.<br>
                    - Tiền tip cho hướng dẫn và tài xế.
                </p><br>
                <h3 style="color: #0094da;">Ghi chú:</h3>
                <p>
                    - Khi đặt Tour du lịch, quý khách phải chịu trách nhiệm với đơn hàng của mình.<strong> Công ty BKC Travel sẽ không chịu trách nhiệm và Không đổi trả dưới mọi hình thức khi đơn hàng đã được xác nhận.</strong><br>
                    - Trong trường hợp khi đơn hàng chưa được xác nhận và quý khách muốn thay đổi thông tin về người đặt hay thay đổi về tour du lịch và số lượng người thì có thể liên hệ qua email hoặc hotline công ty BKC Travel ở trên để được nhân viên tư vấn, hỗ trợ.<br>
                    - Trẻ em dưới 5 tuổi được miễn phí hoàn toàn.<br>
                    - Mang theo nước, nón, kem chống nắng, khăn và kính mắt.<br>
                    - Quý khách cần lưu ý các biển chỉ dẫn và nội quy tham quan.
                </p><br>
                <h3 style="text-align: center;">Công ty <strong>BKC Travel</strong> xin chân thành cảm ơn, tạm biệt và hẹn gặp lại quý khách!</h3>
            </div>
        </div><br><br>
    </div>
</div><hr>
<!--	End Product	-->
<style>
    .box-book-tour:hover {
    background: #00608c; text-decoration: none;
    border-color: #0094da;
}
.box-book-tour {
    background: #0094da;
    color: #FFF;
    padding: 10px 30px;
    border-radius: 25px;
    font-weight: bold;
    border-bottom: 3px solid #00608c;
}
</style>