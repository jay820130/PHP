<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<?php
$link=mysqli_connect("localhost","root","123456","login");
mysqli_query($link,"set name utf8");
$read="SELECT * FROM login  WHERE account='$_SESSION[uAcc]'";//讀取資料
$readresult = mysqli_query($link, $read);//讀出資料
$result=mysqli_fetch_array($readresult);
date_default_timezone_set('Asia/Taipei');
$datetime = date("y-m-j");
if(strtotime($result[4])>=1)
{
	$update="UPDATE login SET counter='$result[4]+1' WHERE account='$_SESSION[uAcc]'";
	mysqli_query($link,$update);
}

echo $_SESSION['uAcc']."歡迎回來，您的上一次登入時間為 ".$result[5]."<br>登入次數為".$result[4]."。<br>";
$datetime = date("y-m-j");
$update2="UPDATE login SET lasttime='$datetime' WHERE account='$_SESSION[uAcc]";
mysqli_query($link,$update2);




?>
<a href="profile.php">前往個人資料</a>
<center/>
</body>
</html>
