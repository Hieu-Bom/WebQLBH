<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="image/avt.ico" />
		<title>Quản lý thông tin người dùng</title>
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
				width: 150px;
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
				margin-left: 370px;
			}
			#banner img{
				width: 1024px;
				height: auto;
				margin-left: 150px;
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
			#footer{
				text-align: center;
				width: 1024px;
				background: yellow;
				color: #4800FF;
				margin-left: 150px;
				float: left;
				font-size: 16px;
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
		<div id="banner">
			<img src="image/banner.jpg">
		</div>
		<div id="chu-chay">
			<marquee>XIN CHÀO ĐẾN VỚI 1 CHÚ WEB CỦA CAO TRUNG </marquee>
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
