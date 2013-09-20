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
			<a class="vm-list-item" href="input.php">Input</a>
		</li>
		<li>
			<a class="vm-list-item" href="radio.php">Radio</a>
		</li>
		<li>
			<a class="vm-list-item" href="checkbox.php">CheckBox</a>
		</li>
		<li>
			<a class="vm-list-item" href="textarea.php">Textarea</a>
		</li>
		<li>
			<a class="vm-list-item" href="select.php">Select</a>
		</li>
		<li>
			<a class="vm-list-item" href="onoff.php">On-Off</a>
		</li>
		<li>
			<a class="vm-list-item" href="button.php">Button</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>