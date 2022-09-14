<!DOCTYPE html>
<html>
	<head>
		<title>Car Booking</title>
		<style>
			body{background-color:lightgreen;}
			form{padding-top:30px;}
			button{width:100px; height:30px; background-color:blue; color:white;}
		</style>
	</head>
	<body>
	<center>
			<h1>Student details</h1>
       <form name="f1" action="datas.php" method="post">
			<label>Name</label>
			<input type="text" name="name" required>
			<br><br>
			
			<label>Mobile  </label>
			<input type="number" name="mobile" required>
			<br><br>
			
			<label>Location</label>
			<input type="text" name="location" required>
			<br><br>
			
			<label>Standerd</label>
			<input type="text" name="std" required>
			<br><br>
			
			<label>Mark</label>
			<input type="number" name="mark" required>
			<br><br>
			
			<label>Rank</label>
			<input type="numbr" name="rank" required>
			<br><br>
			
			<button>Submit</button>
			
			
	   
	   </form><br><br><br>
	   <a href="alldetails.php">View all details</a>
	   <br>
	   <a href="updatedetail.php">Update detail</a>
	   <br><br>
	   <a href="delete.php">Delete</a>
	   </center>
	</body>
</html>