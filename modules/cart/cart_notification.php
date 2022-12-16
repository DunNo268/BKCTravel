<div id="cart">
    <a href="index.php?page_layout=cart">giỏ hàng</a>
    <span>
        <?php 
            if(isset($_SESSION['cart'])) {
                echo count($_SESSION['cart']);
            }else{
                echo 0;
            }
        ?>
    </span>
</div>