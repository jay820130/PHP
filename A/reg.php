<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>註冊</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="uAcc"><br/>
請輸入密碼:<input type="password" name="uPwd"><br/>
電話:<input type="text" name="phone"><br/>
e-mail:<input type="text" name="mail"><br/>
<input type="submit" value="確定">
<input type="reset" value="清除資料">
</form>
<?php 
if(($_POST["uAcc"]) && ($_POST["uPwd"])!=NULL){
	$uAcc=$_POST["uAcc"];
	$uPwd=$_POST["uPwd"];
	$phone=$_POST["phone"];
	$mail=$_POST["mail"];
	date_default_timezone_set('Asia/Taipei');
	$datetime = date("Y-m-d");
	//$datetime = new DateTime("now",new DateTimeZone('Asia/Taipei'));

$link=mysqli_connect("localhost","root","123456","login");
mysqli_query($link,"set name utf8");

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST["mail"])) {
    echo "e-mail格式錯囉!要跳轉囉!"; 
    header('refresh:1; url="reg.php"');
}
else{
$add="INSERT INTO login(account,pwd,phone,email,counter,lasttime) VALUES('$uAcc','$uPwd','$phone','$mail','0','$datetime')";

$check="SELECT * FROM login WHERE account='$uAcc'";
$readresult=mysqli_query($link,$check);
$result=mysqli_fetch_array($readresult);
if ($result[1]=="$uAcc"){
	echo "帳號已被使用";
	echo	"<br/>";
	header('refresh:3; url="reg.php"');
}else
{
	mysqli_query($link,$add);
	echo "註冊成功，3秒後前往登入頁面";
	echo	"<br/>";
	header('refresh:3; url="log.php"');
}


}
}
?>
<a href="log.php">前往登入</a>
</center>
</body>
</html>