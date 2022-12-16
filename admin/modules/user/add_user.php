<?php
    //Thêm thành viên
    if(isset($_POST['sbm'])) {
        if(empty($_POST['user_full'])) {
            echo "Bạn chưa nhập tên thành viên!";
        }else{
            $user_full = $_POST['user_full'];
        }
        $user_mail = $_POST['user_mail'];
        $user_pass = $_POST['user_pass'];
        $user_level = $_POST['user_level'];
        $sqlInsert = "INSERT INTO user(user_full, user_mail, user_pass, user_level) VALUES 
        ('$user_full', '$user_mail', '$user_pass', '$user_level')";

        if(mysqli_query($conn, $sqlInsert)) {
            header("location: index.php?page=user");
        }else{
            echo "<script>alert('Thêm Thành viên không thành công');</script>";
        }
}   
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="">Quản lý tài khoản</a></li>
			<li class="active">Thêm tài khoản</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thêm tài khoản</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-8">
							<!-- <div class="alert alert-danger">Email đã tồn tại !</div> -->
							<form role="form" method="post">
							<div class="form-group">
								<label>Họ & Tên</label>
								<input name="user_full" required class="form-control" placeholder="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input name="user_mail" required type="text" class="form-control">
							</div>                       
							<div class="form-group">
								<label>Mật khẩu</label>
								<input name="user_pass" required type="password"  class="form-control">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu</label>
								<input name="user_re_pass" required type="password"  class="form-control">
							</div>
							<div class="form-group">
								<label>Quyền</label>
								<select name="user_level" class="form-control">
									<option value=1>Admin</option>
									<option value=2>Member</option>
								</select>
							</div>
							<button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
							<button type="reset" class="btn btn-default">Làm mới</button>
						</div>
					</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	
</div>	<!--/.main-->	

