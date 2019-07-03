<?php session_start();
$uname=$_POST['uname'];
$pass=($_POST['pwd']);
include ("common/connection.php"); 
$conn=connect();
$loginQuery="SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";

$res=mysqli_query($conn,$loginQuery);
if(mysqli_num_rows($res))
{
	$message="Login Successful";
	$_SESSION['username']=$uname;
	header("location:index.php");
}
else
{
	$message="Invalid Login";
}
echo $message;

?>