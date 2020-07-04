<?php
include("diary_db_connection.php");

$a = $_POST['emotion'];
$b = $_POST['diary_date'];
$c = $_POST['content'];

if(mysqli_query($con,"INSERT INTO `dailylife`.`diary` (`emotion`, `date`, `content`) VALUES ('$a', '$b', '$c');"))
	header("Location: writedairy.html");
else
	echo "ERROR";

?>