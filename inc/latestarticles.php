<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/IP/inc/head.php';

$query = "SELECT * FROM `la` ORDER BY date DESC; ";
$run = mysql_query($query);

?>







<div class="la">
	<div class="lahead"><h2>Latest Articles</h2></div>
	<div class="labody">
		
		<?php
			while($row = mysql_fetch_array($run)){
				$id = $row['id'];
				$title = $row['title'];
				$description = $row['description'];
				$date = $row['date'];
				$link = $row['link'];
		?>
			
			
		<div class="lapost">
		  <a href="<?php echo $link; ?>">
			<div id="lada" class="laposthead"><?php echo $title; ?></div>
			<div id="lad" class="lapostbody">
		
				<?php echo $description; ?><br><br>
				<?php echo $date; ?><br><br><br>
				
	
			</div>
		  </a>
		</div>
	


	<?php } ?>