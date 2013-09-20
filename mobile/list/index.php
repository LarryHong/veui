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
			<a class="vm-list-item" href="basic.php">Basic list</a>
		</li>
		<li>
			<a class="vm-list-item" href="expend.php">Expend list</a>
		</li>
		<li>
			<a class="vm-list-item" href="order.php">Order List</a>
		</li>
		<li>
			<a class="vm-list-item" href="message.php">Message List</a>
		</li>
		<li>
			<a class="vm-list-item" href="kv.php">Kay&amp;Value List</a>
		</li>
		<li>
			<a class="vm-list-item" href="mix.php">Mix List</a>
		</li>
		<li>
			<a class="vm-list-item" href="imgs.php">Images List</a>
		</li>
		<li>
			<a class="vm-list-item" href="grids.php">Grids List</a>
		</li>
		<li>
			<a class="vm-list-item" href="head.php">Plus: Heading</a>
		</li>
		<li>
			<a class="vm-list-item" href="icon.php">Plus: Icons</a>
		</li>
		<li>
			<a class="vm-list-item" href="button.php">Plus: Button</a>
		</li>
		<li>
			<a class="vm-list-item" href="corner.php">Plus: Corner</a>
		</li>
		<li>
			<a class="vm-list-item" href="dropmenu.php">JavaScript: DropMenu</a>
		</li>
		<li>
			<a class="vm-list-item" href="hdtop.php">JavaScript: HeaderTop</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>