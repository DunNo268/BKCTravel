<?php 
// session_start();
if(!defined("ISLOGGED")) {
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BKC Travel - Administrator</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>BKC</span>Travel</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	<!--sidebar-->	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="index.php?page=user"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Quản lý tài khoản</a></li>
			<li><a href="index.php?page=product"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý Tour du lịch</a></li>
			<li><a href="index.php?page=order"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý đơn hàng</a></li>
		</ul>
	</div>
	<!--/.sidebar-->
	
	<!-- Main Content -->
	<?php
	// switch-case
	
	if(isset($_GET['page'])) {
		switch ($_GET['page']) {
			// product module
			case 'product':
				require_once "modules/product/product.php";
				break;
			case 'add_product':
				require_once "modules/product/add_product.php";
				break;
			case 'edit_product':
				require_once "modules/product/edit_product.php";
				break;
			// user module
			case 'user':
				require_once "modules/user/user.php";
				break;
			case 'add_user':
				require_once "modules/user/add_user.php";
				break;
			case 'edit_user':
				require_once "modules/user/edit_user.php";
				break;
			//order module
			case 'order':
				require_once "modules/orders/order.php";
				break;
			case 'edit_order':
				require_once "modules/orders/edit_order.php";
				break;
			case 'order_processed':
				require_once "modules/orders/processed_order.php";
				break;
			case 'processed_order_detail':
				require_once "modules/orders/processed_order_detail.php";
				break;
			case 'order_detail':
				require_once "modules/orders/order_detail.php";
				break;
		}
	}else{
		require_once "static.php";
	}
	?>
	<!-- ./Main Content -->
</body>

</html>
