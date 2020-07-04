<?php
include("diary_db_connection.php");

$a = $_POST['emotion'];

$result=mysqli_query($con,"SELECT * FROM `diary` WHERE `emotion` = '$a';");

if(mysqli_num_rows($result) > 0)
	echo "<br><br>Times when you were ".$a."<br>";
else
	echo "<br><br>Diary is Empty...";

while($row = mysqli_fetch_array($result)) 
{
	echo "<br>";
	echo $row['date']." : Feeling ".$row['emotion'];
	echo "<br>";
	echo $row['content'];
	echo "<br>";
}

?>