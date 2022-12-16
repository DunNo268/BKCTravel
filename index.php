<?php 
    session_start();
    include_once "config/connectDB.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Trang chủ</title>
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/success.css">
<link rel="stylesheet" href="css/products.css">
<link rel="stylesheet" href="css/news.css">
<link rel="stylesheet" href="css/feedback.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slideshow.js"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
    <div>
        <?php include_once "modules/logo/logo.php"; ?>
        <?php include_once "modules/cart/cart_notification.php"; ?>
    </div>
    <?php include_once "modules/header/menu.php"; ?>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div>
        <div>
        	<div>
                <?php 
                    if(isset($_GET['page_layout'])) {
                        switch ($_GET['page_layout']) {
                            case 'introduce':
                                include_once "modules/introduce/introduce.php";
                                break;
                            case 'product_all':
                                include_once "modules/product/product_all.php";
                                break;
                            case 'product':
                                include_once "modules/product/product.php";
                                break;
                            case 'contact':
                                include_once "modules/contact/contact.php";
                                break;
                            case 'feedback':
                                include_once "modules/feedback/feedback.php";
                                break;
                            case 'feedbackdone':
                                include_once "modules/feedback/feedbackdone.php";
                                break;
                            case 'cart':
                                include_once "modules/header/menu.php";
                                include_once "modules/cart/cart.php";
                                break;
                            case 'success':
                                include_once "modules/cart/success.php";
                                break;
                        }
                    }else{
                        include_once "modules/cut/img.php";
                        include_once "modules/cut/introduce.php";
                        include_once "modules/cut/news.php";
                        include_once "modules/cut/travel.php";
                        include_once "modules/slide/slide.php";
                        include_once "modules/cut/coin.php";
                    } 
                ?>
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->

<!-- Footer -->
<?php include_once "modules/footer/footer.php"; ?>
<!-- ./Endfooter -->
</body>
</html>
