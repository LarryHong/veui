<?php
include_once("common.php");
include_once($config['include_path']."block.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<?php show_meta();?>

</head>
<body>
<?php show_header();?>
<div id="test">
	<ul class="vm-list vm-list-base">
		<li>
			<a class="vm-list-item" href="original/">Original</a>
		</li>
		<li>
			<a class="vm-list-item" href="grid/">Grid</a>
		</li>
		<li>
			<a class="vm-list-item" href="fonts/">Fonts</a>
		</li>
		<li>
			<a class="vm-list-item" href="button/">Button</a>
		</li>
		<li>
			<a class="vm-list-item" href="tabs/">Tabs</a>
		</li>
		<li>
			<a class="vm-list-item" href="nav/">Navigation</a>
		</li>
		<li>
			<a class="vm-list-item" href="list/">List</a>
		</li>
		<li>
			<a class="vm-list-item" href="pagination/">Pagination</a>
		</li>
		<li>
			<a class="vm-list-item" href="form/">Form</a>
		</li>
		<li>
			<a class="vm-list-item" href="calendar/">Calendar</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>