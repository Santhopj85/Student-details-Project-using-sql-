<?php
$con=new mysqli("127.0.0.1","root","","school");
if($con->connect_error)
{
	echo "<p>Connect failed</P>";
}
else
{
	echo "<p>Connect Successfully</p>";
	$sqlquery="delete from studentDetails where id=1";
	if($con->query($sqlquery)==TRUE)
	{
		echo "<p>Successfully Updated</p>";
		header("Location: alldetails.php");
	}
	else
	{
		echo "<p>check your information</p>";
	}
	$con->close();
}
?>