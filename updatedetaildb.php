<?php
$id=$_POST["sid"];
$mark=$_POST["mark"];
$rank=$_POST["rank"];
echo "<p>Id : $id</p>";
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
	$sqlquery="update studentDetails set mark='".$mark."',rank='".$rank."' where id='".$id."'";
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