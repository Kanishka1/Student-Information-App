<?php 

$name=$_POST['name'];
$contact=$_POST['studentContact'];
$address=$_POST['studentAdd'];
$roll=$_POST['studentRoll'];
$img='';
$sid=$_POST['sid'];

if(isset($_FILES['studentPic']))
{
	$filename=$_FILES['studentPic']['name']; //user's file
	$fileext=explode(".",$filename); //exploding from .file,storing it in an array
	$ext=end($fileext); //to extract the end extension of a file

	$new=md5("12".date('YmdHis')).".".$ext; // new file name default string therefore attch user id with current date
	//echo $new;
	//echo $_FILES['studentPic']['name'];
	$tmp_path=$_FILES['studentPic']['tmp_name'];
	$path="uploads/".$new;
	if(move_uploaded_file($tmp_path,$path))
	{
		$img=$new;
	}
}

if(!empty($img))
{
	$updateQuery ="UPDATE students SET sname='$name', scontact='$contact',saddress='$address',spic='$img',rollNo='$roll'where sid='$sid'";
}
else
{
	$updateQuery ="UPDATE students SET sname='$name', scontact='$contact',saddress='$address',rollNo='$roll'where sid='$sid'";	
}


include('common/connection.php');
$conn=connect();
if(mysqli_query($conn,$updateQuery))
{
	header("location:index.php");
	//echo "Record successfully registered";
}
else
{
	echo mysqli_error($conn);

	//echo "Try Again";
}
?>