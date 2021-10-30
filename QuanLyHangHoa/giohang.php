<?php 
	//kết nối tới server , database
	$conn = mysqli_connect("localhost","root","","quanlybanhang");

	mysqli_query($conn,"SET quanlybanhang 'utf8'");

	//tạo chuỗi sql
	$sql = "select * from giohang";

	//thực hiện query truy vấn
	$kq = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="image/avt.ico" />
		<title>Giỏ hàng</title>
		<style type="text/css">
			body{
				width: 100%;
				height: 500px;
			}
			#menu-top{
				width: 1024px;
				height: 40px;
				background: yellow;
				margin-left: 150px;
			}
			#menu-top ul li{
				list-style: none;
				float: left;
				padding: 10px 10px 0 20px;
			}
			#menu-top ul li a{
				text-decoration: none;
				display: block;
				color: #4800FF;
				margin-left: 5px;
    			margin-bottom: 10px;
			}
			#menu-top li ul{
				display: none;
				position: absolute;
				height: 20px;
			}
			#menu-top li>ul li{
				width: 100%;
				background: #E4FF00;
				text-align: left;
			}
			#menu-top  li:hover > ul{
			    display:  block;
			}
			#menu-top .tk{
				margin-top: -19px;
				margin-left: 380px;
			}
			#chu-chay{
				width: 1024px;
				margin-left: 150px;
				color: red;
				font-size: 20px;
				font-weight: bold;
				background: white;
				margin-top: -3.4px;
				text-align: center;
			}
			#main{
				width: 1024px;
				height: 500px;
			}
			#main h3{
				margin-left: 600px;
				margin-top: 40px;
			}
			#main table{
				margin-left: 150px;
				margin-top: 30px;
				width: 1024px;
				text-align: center;
			}
			#footer{
				text-align: center;
				width: 1024px;
				background: yellow;
				color: #4800FF;
				margin-left: 150px;
				float: left;
				font-size: 16px;
				margin-top: -120px;
			}
		</style>
	</head>
	<body>
		<div id="menu-top">
			<ul>
				<li>
					<a href="trangchu.php">
						Trang chủ
					</a>
				</li>
				<li>
					<a href="giohang.php">
						Giỏ hàng
					</a>
				</li>
				<li>
					<a href="">
						Thao tác
					</a>
					<ul>
						<li>
							<a href="dangky.php">
								Đăng ký
							</a>
						</li>
						<li>
							<a href="dangnhap.php">
								Đăng xuất
							</a>
						</li>
					</ul>
				</li>
				<li>
					<form action="timkiem.php"  class="tk" method="get">
						<br><input type="text" name="timkiem"/>
						<input type="submit" name="ok" value="Tìm kiếm"/>
					</form>
				</li>
			</ul>
		</div>
		<div id="chu-chay">
			<marquee>Giỏ hàng!</marquee>
		</div>
		<div id="main">
			<h3>Danh sách đơn hàng</h3>
			<table border ="1px" >
			 	<tr>
			 		<th>
			 			STT
			 		</th>
			 		<th>
			 			Tên hàng hóa
			 		</th>
			 		<th>
			 			Mã hàng hóa
			 		</th>
			 		<th>
			 			Giá
			 		</th>
			 		<th>
			 			Số lượng
			 		</th>
			 		<th>
			 			Thành tiền
			 		</th>
			 		<th>
			 			Ảnh
			 		</th>
			 		<th>
			 			Xóa vào giỏ hàng
			 		</th>
			 		<th>
			 			Sửa đơn hàng
			 		</th>
			 		<th>
			 			Mua
			 		</th>
			 	</tr>
			 	<?php 
				 	$rows = mysqli_num_rows($kq);
				 	$i = 1;
				 	if($rows)
				 		while ($rs = mysqli_fetch_array($kq)) {
				 			echo "<tr>";
				 			echo "<td>".$i."</td>";
				 			echo "<td>".$rs["ten"]."</td>";
				 			echo "<td>".$rs["ma"]."</td>";
				 			echo "<td>".$rs["gia"]."vnđ</td>";
				 			echo "<td>".$rs["soluong"]."</td>";
				 			echo "<td>".$rs["tien"]."vnđ</td>";
				?>
			 			<th>
							<img src="<?php echo $rs["anh"]?>" width="50px" height="50px">
						</th>
			 	<?php
				 			echo "<td> <a href ='xoagiohang.php?id=".$rs['id']."'> Xóa khỏi giỏ hàng</a> </td>";
				 			echo "<td> <a href ='suagiohang.php?id=".$rs['id']."'> Sửa đơn hàng</a> </td>";
				 			echo "<td> <a href ='mua.php'> Mua </a></td>";
				 			echo "</tr>";
				 			$i++;
				 		}
			 	?>
			</table>
		</div>
		<div id="footer">
			<p>
				Email: Caodinhtrung2k@gmail.com
			</p>
			<p>
				Phone: 0969461846
			</p>
		</div>
	</body>
</html>