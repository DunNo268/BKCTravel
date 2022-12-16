<?php
    if(isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];
        $sqlOrder_detail = "SELECT product.prd_id, product.prd_name, product.prd_image, product.prd_price, orderdetail.qty, orders.user_name FROM orderdetail 
        INNER JOIN product ON orderdetail.prd_id = product.prd_id
        INNER JOIN orders ON orderdetail.order_id = orders.order_id
        WHERE orderdetail.order_id = $order_id";
        $resultOrder_detail = mysqli_query($conn, $sqlOrder_detail);
    }else{
        header('location: index.php?page=orders');
    }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Quản lý đơn hàng</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý đơn hàng</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
        <div class="col-12">
            <ul></ul>
        </div>
		<div class="col-md-12">
				<div class="panel panel-default">
						<div class="panel-body">
							<table  data-toolbar="#toolbar"data-toggle="table">
                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable="true">ID</th>
                                        <th data-field="prd_name" data-sortable="true">Tên Tour du lịch</th>
                                        <th data-field="prd_image" data-sortable="true">Hình ảnh Tour du lịch</th>
                                        <th data-field="prd_price" data-sortable="true">Giá / Người</th>
                                        <th data-field="qty" data-sortable="true">Số người</th>
                                    </tr>
                                </thead>
								<tbody>
                                    <?php  if(mysqli_num_rows($resultOrder_detail)) {
                                                while ($row = mysqli_fetch_assoc($resultOrder_detail)) {
                                    ?>  
                                        <ul>               
                                            Tên khách hàng: <?php echo $row['user_name']; ?>
                                        </ul>    
                                        <tr>
                                            <td style=""><?php echo $row['prd_id']; ?></td>
                                            <td style=""><?php echo $row['prd_name']; ?></td>
											<td id = "img_col">
                                                <img width="140" height="100" src="images/travel/<?php echo $row['prd_image']; ?>" />
                                            </td>
                                            <td style=""><?php echo number_format($row['prd_price'],0,",","."); ?>đ</td>
											<td style=""><?php echo $row['qty']; ?></td>
                                        </tr>
                                    <?php         
                                            }
                                        } 
                                    ?>
								</tbody>
							</table>
						</div>
				</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<style>
    #img_col {
        text-align: center !important;
    }
</style>	
