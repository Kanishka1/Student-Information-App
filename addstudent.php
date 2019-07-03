<?php include ('common/header.php'); ?> 


<div class="container">
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<a href="index.php">Go Back to list</a>
	<h2>Add New student</h2>
	<form method="post" action="addaction.php" class="loginform" enctype="multipart/form-data">
		

<div class="row">
		<div class="label">Student Name</div>
		<div class="input">
		<input type="text" id="name" name="name"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Contact</div>
		<div class="input">
		<input type="text" id="studentContact" name="studentContact"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Address</div>
		<div class="input">
		<input type="text
		" id="studentAdd" name="studentAdd"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Roll No. </div>
		<div class="input">
		<input type="text" id="studentRoll" name="studentRoll"/>
</div>
<div class="clear"></div>
</div>

<div class="row">
		<div class="label">Student Picture</div>
		<div class="input">
		<input type="file" id="studentPic" name="studentPic"/>
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
