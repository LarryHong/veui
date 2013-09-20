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
			<a class="vm-list-item" href="base.php">Base</a>
		</li>
		<li>
			<a class="vm-list-item" href="corner.php">Plus: Corner</a>
		</li>
		<li>
			<a class="vm-list-item" href="js.php">JavaScript: Tabs</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>