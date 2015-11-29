<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/IP/inc/head.php';
$name = $_POST['name'];

$query = "SELECT * FROM `champions` WHERE `name` = '$name'; ";
$run = mysql_query($query);
$row = mysql_fetch_array($run) or die(mysql_error());
$id = $row['id'];
$name = $row['name'];
$role = $row['stext'];
$srole = $row['role'];
$attack = $row['defense'];
$health = $row['attack'];
$ability = $row['magic'];
$difficulty = $row['difficulty'];
?>

Name:  <?php echo $name;?> <br>
Desc:  <?php echo $role;?> <br>
Role:  <?php echo $srole;?><br>
Defense:  <?php echo $attack;?>/10 <br>
Attack:  <?php echo $health;?>/10<br>
Magic:  <?php echo $ability;?>/10<br>
Difficulty:  <?php echo $difficulty;?>/10<br>
