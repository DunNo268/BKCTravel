<?php 
 //Lấy các thông tin của thành viên cần sửa
 if(isset($_GET['user_id'])) {
     $user_id = $_GET['user_id'];
     $sqlUser = "SELECT * FROM user WHERE user_id = $user_id";
     $resultUser = mysqli_query($conn, $sqlUser);
     $userEdit = mysqli_fetch_assoc($resultUser);
     //Sửa thành viên
     //Lấy thông tin mới
    if(isset($_POST['sbm'])) {
        if(empty($_POST['user_full'])) {
            echo "Bạn chưa nhập tên thành viên!";
        }else{
            $user_full = $_POST['user_full'];
        }
        $user_mail = $_POST['user_mail'];
        $user_pass = $_POST['user_pass'];
        $user_level = $_POST['user_level'];

        $sqlUpdate = "UPDATE user SET
                user_full = '$user_full',
                user_mail = '$user_mail',
                user_pass = $user_pass,
                user_level = 'user_level',
                WHERE user_id = $user_id
        ";

        if(mysqli_query($conn, $sqlUpdate)) {
            header("location: index.php?page=user");
        }else{
            echo "<script>alert('Cập nhật thành viên không thành công');</script>";
        }
    }
     //Viết câu truy vấn cập nhật thông tin thành viên
 }else{
     header('location: index.php?page=user');
 }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="">Quản lý tài khoản</a></li>
			<li class="active"><?php echo $userEdit['user_full'];  ?></li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tài khoản: <?php echo $userEdit['user_full'];  ?></h1>
		</div>
	</div><!--/.row-->
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-8">
							<!-- <div class="alert alert-danger">Email đã tồn tại, Mật khẩu không khớp !</div> -->
						<form role="form" method="post">
							<div class="form-group">
								<label>Họ & Tên</label>
								<input type="text" name="user_full" required class="form-control" value="<?php echo $userEdit['user_full'];  ?>" placeholder="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="user_mail" required class="form-control" value="<?php echo $userEdit['user_mail'];  ?>">
							</div>                       
							<div class="form-group">
								<label>Mật khẩu</label>
								<input type="password" name="user_pass" required  class="form-control" value="<?php echo $userEdit['user_pass'];  ?>">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu</label>
								<input type="password" name="user_re_pass" required  class="form-control" value="<?php echo $userEdit['user_pass'];  ?>">
							</div>
							<div class="form-group">
								<label>Quyền</label>
								<input type="text" name="user_level" required class="form-control" value="<?php echo $userEdit['user_level'];  ?>"  placeholder="">
							</div>
							<button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
							<button type="reset" class="btn btn-default">Làm mới</button>
						</div>
					</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	
</div>	<!--/.main-->	