<?php
include_once("../common.php");
include_once($config['include_path']."block.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<?php show_meta();?>

</head>
<body>
<?php show_header();?>

<div>
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="1_2.php">1/2</a>
		</li>
		<li>
			<a class="vm-list-item" href="1_3.php">1/3</a>
		</li>
		<li>
			<a class="vm-list-item" href="1_4.php">1/4</a>
		</li>
		<li>
			<a class="vm-list-item" href="1_5.php">1/5</a>
		</li>
		<li>
			<a class="vm-list-item" href="x_x.php">X/X</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>