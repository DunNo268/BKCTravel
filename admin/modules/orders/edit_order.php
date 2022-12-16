<?php 
 //Lấy các thông tin của sản phẩm cần sửa
 if(isset($_GET['order_id'])) {
     $order_id = $_GET['order_id'];
     $sqlOrder = "SELECT * FROM orders WHERE order_id = $order_id";
     $resultOrder = mysqli_query($conn, $sqlOrder);
     $OrderEdit = mysqli_fetch_assoc($resultOrder);
     //Sửa sản phẩm
     //Lấy thông tin mới
    if(isset($_POST['sbm'])) {
        if(empty($_POST['user_name'])) {
            echo "Bạn chưa nhập tên khách hàng!";
        }else{
            $user_name = $_POST['user_name'];
        }
        $user_phone = $_POST['user_phone'];
        $user_email = $_POST['user_email'];
        $user_address = $_POST['user_address'];
        $status = $_POST['status'];

        $sqlUpdate = "UPDATE orders SET
                user_name = '$user_name',
                user_phone = '$user_phone',
                user_email = '$user_email',
                user_address = '$user_address',
                status = '$status'
                WHERE order_id = $order_id
        ";

        if(mysqli_query($conn, $sqlUpdate)) {
            header("location: index.php?page=order_processed");
        }else{
            echo "<script>alert('Cập nhật hoá đơn không thành công');</script>";
        }
    }
     //Viết câu truy vấn cập nhật thông tin hoá đơn
 }else{
     header('location: index.php?page=order_processed');
 }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="">Quản lý hoá đơn</a></li>
            <li class="active"><?php echo $OrderEdit['user_name'];  ?></li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin hoá đơn: <?php echo $OrderEdit['user_name'];  ?></h1>
        </div>
    </div><!--/.row-->
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input type="text" name="user_name" required class="form-control" value="<?php echo $OrderEdit['user_name'];  ?>"  placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="user_email" required class="form-control" value="<?php echo $OrderEdit['user_email'];  ?>"  placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="user_phone" required class="form-control" value="<?php echo $OrderEdit['user_phone'];  ?>"  placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="user_address" required class="form-control" value="<?php echo $OrderEdit['user_address'];  ?>" placeholder="">
                            </div> 
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <!-- <select name="status" required class="form-control">
                                    <option <?php if($OrderEdit['status'] == 0) echo 'selected'; ?>>Chưa xử lý</option>
                                    <option <?php if($OrderEdit['status'] == 1) echo 'selected'; ?>>Đang xử lý</option>
                                    <option <?php if($OrderEdit['status'] == 2) echo 'selected'; ?>>Đã xử lý</option>
                                </select> -->
                                <input type="text" name="status" required class="form-control" value="<?php echo $OrderEdit['status'];  ?>"  placeholder="">
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

<script>
    function preview() {
        prd_image.src=URL.createObjectURL(event.target.files[0]);
    }
</script>