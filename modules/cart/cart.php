<?php
if (isset($_SESSION['cart'])) {
    $prdId_list = "";
    foreach ($_SESSION['cart'] as $prd_id => $qty) {
        $prdId_list .= $prd_id.",";
    }
   // $prdId_list = 2,6,
   $prdId_list = rtrim($prdId_list,","); //$prdId_list = 2,6
   $sqlCart = "SELECT * FROM product WHERE prd_id IN($prdId_list)";
   $queryCart = mysqli_query($conn, $sqlCart);
?>
<div style="width: 100%; display: flex;">
    <div style="width: 80%; margin: auto; text-align: left;">
        <!--	Cart	-->
        <div id="my-cart">
            <div class="row">
                <div style="box-sizing: border-box; font-size:20px;" class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin Tour du lịch</div>
                <div style="box-sizing: border-box; font-size:20px;" class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Số người</div>
                <div style="box-sizing: border-box; font-size:20px;" class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
            </div>
            <form method="post" action="modules/cart/process-cart.php?action=submit">
                <?php
                    $price_unit = 0;
                    $total_price = 0;
                    while($cart_item = mysqli_fetch_assoc($queryCart)){
                        $price_unit = $_SESSION['cart'][$cart_item['prd_id']] * $cart_item['prd_price'];
                        $total_price += $price_unit;
                ?>
                    <div class="cart-item row">
                        <div style="box-sizing: border-box;" class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                            <img src="admin/images/travel/<?php echo $cart_item['prd_image']; ?>">
                            <h4 style="font-size:20px;"> <?php echo $cart_item['prd_name']; ?></h4>
                        </div>
                        <div style="box-sizing: border-box;" class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                            <input type="hidden" name="prd_price[<?php echo $cart_item['prd_id']; ?>]" value="<?php echo $cart_item['prd_price']; ?>">
                            <input style="box-sizing: border-box; font-size:20px;" type="number" id="quantity" class="form-control form-blue quantity" 
                                value="<?php echo $_SESSION['cart'][$cart_item['prd_id']]; ?>" 
                                name="quantity[<?php echo $cart_item['prd_id']; ?>]">
                        </div>
                        <div style="box-sizing: border-box;" class="cart-price col-lg-3 col-md-3 col-sm-12"><b style="font-size:20px;"><?php echo number_format($price_unit,0,',','.'); ?>đ</b>
                            <a href="modules/cart/process-cart.php?action=del&prd_id=<?php echo $cart_item['prd_id']; ?>">Xóa</a>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <div class="row">
                    <div style="box-sizing: border-box;" class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                        <button id="update-cart" class="btn btn-success" type="submit" name="update_cart" value="update">Cập nhật giỏ hàng</button>
                    </div>
                    <div style="box-sizing: border-box;" class="cart-total col-lg-2 col-md-2 col-sm-12"><b style="font-size:20px;">Tổng cộng:</b></div>
                    <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
                    <div style="box-sizing: border-box;" class="cart-price col-lg-3 col-md-3 col-sm-12"><b style="font-size:20px;"><?php echo number_format($total_price,0,',','.'); ?>đ</b></div>
                </div>
            <!-- </form> -->
        </div>
        <!--	End Cart	-->

        <?php
            }else{
                echo "<div class='alert alert-danger mt-3'>Có 0 sản phẩm trong giỏ hàng!</div>";
            }
        ?>

        <!--	Customer Info	-->
        <div id="customer">
            <!-- <form method="post"> -->
                <h3>Thông tin Khách hàng:</h3><br>
                <div class="row"> 
                    <div style="box-sizing: border-box;" id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                        <input style="box-sizing: border-box;" placeholder="Họ và tên" type="text" name="user_name" id="user_name" class="form-control user_name">
                        <span id="user_name_error"></span>
                    </div>
                    <div style="box-sizing: border-box;" id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                        <input style="box-sizing: border-box;" placeholder="Số điện thoại" type="text" name="user_phone" id="user_phone" class="form-control">
                        <span id="user_phone_error"></span>
                    </div>
                    <div style="box-sizing: border-box;" id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                        <input style="box-sizing: border-box;" placeholder="Email" type="text" name="user_email" id="user_email" class="form-control">
                        <span id="user_email_error"></span>
                    </div>
                    <div style="box-sizing: border-box;" id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                        <input style="box-sizing: border-box;" placeholder="Địa chỉ" type="text" name="add" id="user_address" class="form-control">
                        <span id="user_address_error"></span>
                    </div>
                </div>
                <p>* Quý khách vui lòng kiểm tra lại thông tin mình vừa nhập.</p><br>
            <!-- </form> -->
                <div class="row">
                    <div class="by-now col-lg-6 col-md-6 col-sm-12">
                        <button class="btn btn-danger" type="submit" name="insert_cart" onclick="return validateForm();" id="btn_insert" value="insert">
                            <b>Đặt ngay</b>
                            <span>Dịch vụ nhanh chóng</span>
                        </button>
                        <img style="max-width: 50px; max-height: 50px; width: auto; height: auto;" src="imgs/icons/pr.png"><button style="background-color: green;" type="submit" class="btn" onclick="printOrder()"><b>In hoá đơn</b></button>                   
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><br><hr>
<!--	End Customer Info	-->
<script>
    function validateForm() {
        const EMPTY_STR = "";
        var check = true;
        var user_name = document.getElementById('user_name');
        var user_phone = document.getElementById('user_phone');
        var user_email = document.getElementById('user_email');
        var user_address = document.getElementById('user_address');
        var user_name_error = document.getElementById('user_name_error');
        var user_phone_error = document.getElementById('user_phone_error');
        var user_email_error = document.getElementById('user_email_error');
        var user_address_error = document.getElementById('user_address_error');
        // console.log(user_name.value == "");
        if(user_name.value == EMPTY_STR) {
            user_name.style.border = "1px solid red";
            user_name_error.innerHTML = "Bạn phải nhập họ tên";
            user_name_error.style.color = "red";
            check = false;
        }
        if(user_phone.value == EMPTY_STR) {
            user_phone.style.border = "1px solid red";
            user_phone_error.innerHTML = "Bạn phải nhập số điện thoại";
            user_phone_error.style.color = "red";
            check = false;
        }
        if(user_email.value == EMPTY_STR) {
            user_email.style.border = "1px solid red";
            user_email_error.innerHTML = "Bạn phải nhập email";
            user_email_error.style.color = "red";
            check = false;
        }if(user_address.value == EMPTY_STR) {
            user_address.style.border = "1px solid red";
            user_address_error.innerHTML = "Bạn phải nhập địa chỉ";
            user_address_error.style.color = "red";
            check = false;
        }
        return check;
    }
</script>
<script>
    function printOrder(){
        window.print();
    }
</script>
<link rel="stylesheet" href="css/oldd.css">