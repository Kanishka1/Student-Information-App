<?php
function connect()
{
	$hostname="localhost";
	$dbuser="root";
	$dbpass="myserver";
	$dbname="sms";
	$conn=mysqli_connect($hostname,$dbuser,$dbpass,$dbname); 
	//establishes a connection and returns a connection
	return $conn;
}
	/*$connection=connect();
	if($connection)
	{
		echo "Connection Successful";
		$Query="SELECT * FROM students";
		$result=mysqli_query($connection,$Query);
		//$data= mysqli_fetch_array($result);
		echo"<pre>";
			print_r($data);
			echo "</pre>";
			if($result)
			{
				while($data=mysqli_fetch_assoc($result))
				{
				echo"<pre>";
				print_r($data);
				echo "</pre>";
			
				}
			}
			else
			{
				echo mysqli_error($connection); //to check error in SQL Queries.
			}
		
	
	}
	else
	{
		echo "Connection Failed";
	}*/

?>