<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>登入</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="uAcc"><br/>
請輸入密碼:<input type="password" name="uPwd"><br/>
<input type="submit" value="登入">
<input type="reset" value ="清除資料">
</form>
<?php
$link=mysqli_connect("localhost","root","123456","login");
mysqli_query($link,"set name utf8");
if(isset($_POST["uAcc"])){
	$uAcc=$_POST["uAcc"];
	$uPwd=$_POST["uPwd"];

//讀取資料
$read="SELECT * FROM login WHERE account='$uAcc' AND pwd='$uPwd'";
$readresult=mysqli_query($link,$read);

$rows=mysqli_num_rows($readresult);
	
if($rows){
	echo "登入成功，三秒後跳轉";
	$_SESSION["check"]="yes";
	$_SESSION["uAcc"]=$uAcc;
	$_SESSION["uPwd"]=$uPwd;

	header('refresh:3; url="index.php"');

	
}
	
else{
	echo "Failed, Will back to login page after 3 second";
	header('refresh:3; url="log.php"');
	
}
}
?>
<a href="reg.php">前往註冊</a>
</center>
</body>
</html>
