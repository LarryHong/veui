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

<article class="vdemo-intro">
	<h2>两列结构</h2>
	<p>将宽度平分为两列，一共有3中方法，可以根据需要选择</p>
	<pre class="vdemo-code"></pre>
</article>

<div class="vdemo-demo">
	<br>
	<button class="vm-btn" type="button">按钮</button><a href="#" class="vm-btn">按钮</a><input type="button" class="vm-btn" name="btn" value="按钮">
	<br><br>
	<input type="button" class="vm-btn" name="btn" value="按钮"><button class="vm-btn" type="button">按钮</button><a href="#" class="vm-btn">按钮</a>
	<br><br>
	<button class="vm-btn-block" type="button">按钮</button>
	<a href="#" class="vm-btn-block">按钮</a>
	<br>
	<div style="padding: 10px;">
	<button class="vm-btn-block" type="button">按钮</button>
	<a href="#" class="vm-btn-block">按钮</a>
	</div>
</div>
<?php show_footer();?>
</body>
</html>