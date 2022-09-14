<!DOCTYPE html>
<html>
	<head>
		<title>Student</title>
		<style>
		body{background-color:#bed1c3}
			#img1{ width:900px; height:250px;}
			h1{padding-top:50px; }
			center a{border:2px solid black; color:white; background-color:blue;}
		</style>
	</head>
	<body>
	<center>
	<img src="images/logo.JPG" alt="no images found" id="img1">
		<h1>Student Details</h1>
		<a href="apply.php">Apply Now</a>
		<br><br>
		<table border="2">
		<tr>
			<td>Student Id</td>
			<td>Student Name</td>
			<td>Student Mobile no</td>
			<td>Location</td>
			<td>Standerd</td>
			<td>Mark</td>
			<td>Rank</td>
			
		</tr>
	<?php
		$con=new mysqli("127.0.0.1","root","","school");
		if($con->connect_error)
		{
		echo "<p>Connect failed</P>";
		}
		else
		{
		//echo "<p>Connect Successfully</p>";
		$sqlquery="select * from studentDetails";
		$result=$con->query($sqlquery);
		if($result->num_rows>0)
		{
			//echo "<p>Datas available</p>";
			while($row=$result->fetch_assoc())
			{
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["mobile"]."</td>";
			echo "<td>".$row["location"]."</td>";
			echo "<td>".$row["std"]."</td>";
			echo "<td>".$row["mark"]."</td>";
			echo "<td>".$row["rank"]."</td>";
			
			echo "</tr>";
			}
		}
		else
		{
			echo "<p>No data found</P>";
		}
		}
	?>
		
		</table>
		
		
		</center>
	</body>
</html>