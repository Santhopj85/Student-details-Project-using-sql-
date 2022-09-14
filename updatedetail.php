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
			<h1>Student Mark and Rank Update form</h1>
       <form name="f1" action="updatedetaildb.php" method="post">
			<label>Id</label>
			<input type="number" name="sid" required>
			<br><br>
		
			<label>Mark</label>
			<input type="number" name="mark" required>
			<br><br>
			
			<label>Rank</label>
			<input type="numbr" name="rank" required>
			<br><br>
			
			<button>Update</button>
			
			
	   
	   </form><br><br><br>
	   <a href="alldetails.php">View all details</a>
	   </center>
	</body>
</html>