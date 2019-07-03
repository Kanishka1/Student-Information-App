<?php 
$sid=$_GET['id'];
if(is_numeric($sid))
{
	 include ("common/connection.php"); 
	$conn=connect();
	$delQuery="DELETE FROM students where sid= $sid";
	if(mysqli_query($conn,$delQuery))
	{
		header("location:index.php");
	}
	else
	{
		echo mysqli_error($conn);
	}

}
else
{
	echo "Invalid Operation";
}
?>