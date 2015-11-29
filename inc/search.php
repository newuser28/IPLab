<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/IP/inc/head.php';
$keyword = $_POST['search'];


$query = "SELECT * FROM `la` WHERE `keyword` LIKE '%$keyword%'";
$run = mysql_query($query);

while($row=mysql_fetch_array($run)){
	$id = $row['id'];
	$title = $row['title'];
	$description = $row['description'];
	$keyword = $row['keyword'];
	$date = $row['date'];
	$link = $row['link'];
	
	
	echo "<a href='".$link."'> ". $title ."  <br> ". $description ." <br> ".  $date ." <br><br><br></a>";
} 


?>