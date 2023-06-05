<?php include('layouts/header.php'); 
require('../database/connect.php');	
require('../database/query.php');	
$sql = "SELECT * from lienhe";
$result = queryResult($conn,$sql);
?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Phản Hồi Khách Hàng</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khách Hàng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                	Liên Hệ
                            	</h4>
                                <h6 class="card-subtitle">Thông tin khách hàng trong hệ thống</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách khách hàng</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Họ Tên </th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Số Điện Thoại</th>
                                                <th scope="col">Tin Nhắn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       		<?php if(!isset($result->num_rows)){ ?>
                                       			<p>Không có khách hàng nào để hiển thị</p>
                                       		<?php } else { ?>

					                        <?php while($row = $result->fetch_assoc()) { ?>
	                                            <tr>
                                                    <td><?php echo $row['hoten']; ?></td>
	                                                <td><?php echo $row['email']; ?></td>
	                                                <td><?php echo $row['dienthoai']; ?></td>
	                                                <td><?php echo $row['tinnhan']; ?></td>
	                                            </tr>
                                            <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php require(__DIR__.'/layouts/footer.php'); ?>		
