<?php
/*
$host='localhost';
$user="seohwan91";
$password="Seohwan91";
$link= mysqli_connect($host, $user, $password);
if(!$link)
    echo "disconnected";
mysqli_select_db($link,"seohwan91");
$result = mysqli_query($link, "SELECT * FROM mydb");
   while( $row = mysqli_fetch_assoc($result)){
   echo $row['Name']."\n";
    }
*/
?>
<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to EasyStudy</title>

	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/mobile1.css" media="screen and (max-width : 568px)">

	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.php" class="logo">
			<img src="images/temp.jpg" alt="">
			<!--"images/logo.jpg"-->
		</a>
		<ul id="navigation">
			<li class="selected">
				<a href="introduce.html">Easy study 소개</a>
			</li>
			<li>
				<a href="reservation.html">이용 안내 및 예약</a>
			</li>
			<li>
				<a href="notice.html">공지 사항</a>
			</li>
			<li>
				<a href="map.html">오시는 길</a>
			</li>
		</ul>
	</div>

	<div id="body">

		<ul class="gallery">
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
			<li>
					<img src="images/temp.jpg" alt="">
			</li>
		</ul>
	</div>
	<div id="footer">
		<div>
			<ul>
				<li>
					<a href="http://www.twitter.com/" id="twitter">twitter</a>
				</li>
				<li>
					<a href="http://www.facebook.com/" id="facebook">facebook</a>
				</li>
				<li>
					<a href="http://www.googleplus.com/" id="googleplus">googleplus</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
