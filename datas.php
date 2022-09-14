<?php

$name=$_POST["name"];
$mobile=$_POST["mobile"];
$location=$_POST["location"];
$std=$_POST["std"];
$mark=$_POST["mark"];
$rank=$_POST["rank"];
echo "<p>Name: $name</p>";
echo "<p>Mobile No: $mobile</p>";
echo "<p>Location: $location</p>";
echo "<p>Standerd: $std</p>";
echo "<p>Mark: $mark</p>";
echo "<p>Rank: $rank</p>";

?>

<?php
$con=new mysqli("127.0.0.1","root","","school");
if($con->connect_error)
{
	echo "<p>Connect failed</P>";
}
else
{
	echo "<p>Connect Successfully</p>";
	$sqlquery="insert into studentDetails(name,mobile,location,std,mark,rank)values('".$name."','".$mobile."','".$location."','".$std."','".$mark."','".$rank."')";
	if($con->query($sqlquery)==TRUE)
	{
		echo "<p>Successfully insert</p>";
		header("Location: apply.php");
	}
	else
	{
		echo "<p>check your information</p>";
	}
	$con->close();
}
?>