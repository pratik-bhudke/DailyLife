<?php
include("diary_db_connection.php");

$a = $_POST['diary_date'];

$result=mysqli_query($con,"SELECT * FROM `diary` WHERE `date` = '$a';");

if(mysqli_num_rows($result) > 0)
	echo "<br><br>Dairy Contents :<br>";
else
	echo "<br><br>Diary is Empty...<br>";

while($row = mysqli_fetch_array($result)) 
{
	echo "<br>";
	echo $row['date']." : Feeling ".$row['emotion'];
	echo "<br>";
	echo $row['content'];
	echo "<br>";
}

?>