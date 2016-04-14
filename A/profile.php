<?php session_start(); 

$link=mysqli_connect("localhost","root","123456","login");
mysqli_query($link,"set name utf8");
echo "<form action='profile.php' method='post'>";
//讀取資料
$read="SELECT * FROM login WHERE account='$_SESSION[uAcc]'";
$update="UPDATE login SET uAcc='$_SESSION[uAcc]' WHERE account='$_SESSION[uAcc]'";
mysqli_query($link,$update);

$readresult=mysqli_query($link,$read);

	echo "<table border='1'>";
	echo "<tr><td>使用者帳號</td><td>使用者密碼</td><td>Email</td><td>phone</td><td>刪除資料</td></tr>";
	$result=mysqli_fetch_array($readresult);
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td>";
	echo "<td><a href='checkdel.php'>刪除帳號</a></td>";
	echo "</tr>";
	echo "</table>";
	echo "修改資料:新密碼<input type='text' name='$uPwd'><br/>";
	echo "Email:<input type='text' name='$email'><br/>";
	echo "Phone:<input type='text' name='$phone'><br/>";
	$update="UPDATE login SET pwd='$uPwd',email='$email',phone='$phone' WHERE account='$_SESSION[uAcc]'";
	echo "<input type='submit' value='更新'>";
?>