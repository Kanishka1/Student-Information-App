<?php include ('common/header.php'); ?> 

<?php 
$sid=$_GET['id'];
$studentDataQuery="SELECT * from students where sid=$sid";
include ("common/connection.php"); 
$conn=connect();
//$studentDataQuery="SELECT sid,rollNo,spic,sname,scontact from students";
$studentResult=mysqli_query($conn,$studentDataQuery);
$studentData=mysqli_fetch_assoc($studentResult);
print_r($studentData);

?>



<div class="container">
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<a href="index.php">Go Back to list</a>
	<h2>Edit student</h2>
	<form method="post" action="updateAction.php" class="loginform" enctype="multipart/form-data" >
		

<div class="row">
		<div class="label">Student Name</div>
		<div class="input">
		<input type="text" id="name" name="name" value="<?php echo $studentData['sname'];?>"/>
		<input type="hidden" name="sid" value="<?php echo $studentData['sid'];?>"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Contact</div>
		<div class="input">
		<input type="text" id="studentContact" name="studentContact" value="<?php echo $studentData['scontact'];?>"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Address</div>
		<div class="input">
		<input type="text" id="studentAdd" name="studentAdd" value="<?php echo $studentData['saddress'];?>"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Roll No. </div>
		<div class="input">
		<input type="text" id="studentRoll" name="studentRoll" value="<?php echo $studentData['rollNo'];?>"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Picture</div>
		<div class="input">
		<input type="file" id="studentPic" name="studentPic" value="<?php echo $studentData['spic'];?>"/>
		<?php
		if(!empty($studentData['spic'])){ ?>
		<img src="uploads/<?php echo $studentData['spic'];?>" height="100"/>
		<?php } ?>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="input">
		<input type="submit" name="submit" value="ADD RECORD"/>
		</div>
		<div class="clear"></div>
</div>
	</form>
</div>
<?php include ('common/footer.php'); ?> 
