<?php
include("diary_db_connection.php");

$result=mysqli_query($con,"SELECT * FROM `diary` WHERE `emotion` = 'Happy';");
$result1=mysqli_num_rows($result);

$result=mysqli_query($con,"SELECT * FROM `diary` WHERE `emotion` = 'Sad';");
$result2=mysqli_num_rows($result);

$result=mysqli_query($con,"SELECT * FROM `diary` WHERE `emotion` = 'Angry';");
$result3=mysqli_num_rows($result);

$result=mysqli_query($con,"SELECT * FROM `diary` WHERE `emotion` = 'Surprised';");
$result4=mysqli_num_rows($result);

$result=mysqli_query($con,"SELECT * FROM `diary` WHERE 1");
$result5=mysqli_num_rows($result);

$hyp = ($result1/$result5) * 100;
$sdp = ($result2/$result5) * 100;
$ayp = ($result3/$result5) * 100;
$spp = ($result4/$result5) * 100;

$table = array();
$table['cols'] = array(
    //Labels for the chart, these represent the column titles
    array('id' => 'emotion`', 'label' => 'Emotion', 'type' => 'string'),
    array('id' => 'percent', 'label' => 'Percent', 'type' => 'number')
    );
	
$rows=array();

$temp = array();
     
$temp[0] = array('v' => 'Happy');
$temp[1] = array('v' => (float) $hyp); 
$rows[] = array('c' => $temp);

$temp[0] = array('v' => 'Sad');
$temp[1] = array('v' => (float) $sdp); 
$rows[] = array('c' => $temp);

$temp[0] = array('v' => 'Angry');
$temp[1] = array('v' => (float) $ayp); 
$rows[] = array('c' => $temp);

$temp[0] = array('v' => 'Surprised');
$temp[1] = array('v' => (float) $spp);
$rows[] = array('c' => $temp);

 
$table['rows'] = $rows;
 
echo json_encode($table);
//echo $jsonTable;

?>

