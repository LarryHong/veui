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
			<a class="vm-list-item" href="base.php">Base Button</a>
		</li>
		<li>
			<a class="vm-list-item" href="icon.php">Icon Button</a>
		</li>
		<li>
			<a class="vm-list-item" href="group.php">Group Button</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>