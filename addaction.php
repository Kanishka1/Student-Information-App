<?php
$name=$_POST['name'];
$contact=$_POST['studentContact'];
$address=$_POST['studentAdd'];
$roll=$_POST['studentRoll'];
$img='';
$todayDate=date('Y-m-d'); //YYYY-MM-DD

//etracting image extension
$filename=$_FILES['studentPic']['name'];
$fileext=explode(".",$filename);
$ext=end($fileext); 

//creating default filename
$new=md5("12".date('YmdHis')).".".$ext;

//storing default filename to the uploads folder
$tmp_path=$_FILES['studentPic']['tmp_name'];
$path="uploads/".$new;

if(move_uploaded_file($tmp_path,$path))
{
	$img=$new;//echo"File Uploaded";
}
//establishing connection with the server//


$insertQuery= "INSERT into students(sname,scontact,saddress,spic,createdOn,rollNo)values('$name','$contact','$address','$img','$todayDate','$roll')";

include('common/connection.php');
$conn=connect();
if(mysqli_query($conn,$insertQuery))
{
	
	
		header("location:index.php");
	//echo "Record successfully registered";
}
else
{
	echo mysqli_error($conn);

	//echo "Try Again";
}