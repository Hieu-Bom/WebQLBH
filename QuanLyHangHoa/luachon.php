<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="image/avt.ico" />
	<meta charset="utf-8">
	<title>Đăng nhập</title>
	<style type="text/css">
		body{
			background: url(image/luachon.png);
			background-size: cover;
		}
		.dangnhap {
			margin-top: 30px;
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
		#main form{
			width: 220px;
			height: 50px;
			margin-left: 600px;
			margin-top: 280px;
		}
		#main form a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div id="chu-chay">
		<marquee>Đăng nhập tài khoản người dùng!</marquee>
	</div>
	<div id="main">
		<form>
			<table>
				<th>
					<button>
						<a href="index.php">
							<img src="image/icontrangchu.png" width="30px" height="30px" align="center">
							Vào Web
						</a>
					</button>
				</th>
				<th>
					<button>
						<a href="quanly.php">
							<img src="image/iconquanly.jpg" width="30px" height="30px" align="center">
							Quản lý
						</a>
					</button>
				</th>
				<th>
					<button>
						<a href="dangnhap.php">
							<img src="image/iconquaylai.png" width="30px" height="30px" align="center">
							Trở về
						</a>
					</button>
				</th>
			</table>
		</form>
	</div>
</body>
</html>