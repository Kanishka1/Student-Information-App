<?php include ('common/header.php');
session_start();
if(isset($_SESSION['$username']))
{
	header("location:index.php");
} //include files, require generates an error if file not found
else
{
	echo "<a href ='logout.php'>LOG OUT </a>";
}
?> 
<a href ='login.html'>LOG IN </a>
<div class ="container">
	<h2> Student List</h2>

	<a href="addstudent.php">Add New Record</a>
	<table border="1">
		<tr>
			<th>Roll No.</th>
			<th>SPic</th>
			<th>Name</th>
			<th>Contact</th>
			<th>Action</th>
		</tr>
	
</div>

<?php include ("common/connection.php"); 
$conn=connect();
$studentDataQuery="SELECT sid,rollNo,spic,sname,scontact from students";
$studentResult=mysqli_query($conn,$studentDataQuery);
while($studentData=mysqli_fetch_assoc($studentResult))

{


?>
<tr>
	<td><?php echo $studentData['rollNo'];?></td>
	<td><?php if(!empty($studentData['spic'])){ ?>
		<img src="uploads/<?php echo $studentData['spic'];?>" height="100"/>
		<?php } ?></td>
	<td><?php echo $studentData['sname'];?></td>
	<td><?php echo $studentData['scontact'];?></td>
	<td><a href="editStudent.php?id=<?php echo $studentData['sid'];?>">Edit</a>
		<a href="deleteStudent.php?id=<?php echo $studentData['sid'];?>">Delete</a>
	</td> 



	<!--
	Edit link added to edit details 
	-->
</tr>
	<?php }?>
</table>
<?php include "common/footer.php" ?>