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
	<h2>Inline Button</h2>
	<p>最基本的按钮形式</p>
	<pre class="vm-code">&lt;button type="button" class="vm-btn"&gt;Button&lt;/button&gt;</pre>
	<pre class="vm-code">&lt;a href="#" type="button" class="vm-btn"&gt;Button&lt;/a&gt;</pre>
</article>

<div class="vdemo-demo">
	<div class="vm-btn-group">
		<a href="#" class="vm-btn ve-first">Button 1</a>
		<a href="#" class="vm-btn">Button 2</a>
		<a href="#" class="vm-btn">Button 3</a>
		<a href="#" class="vm-btn ve-last">Button 4</a>
	</div>
</div>

<div class="vdemo-demo">
	<div class="vm-btn-grouph-block vg-4">
		<a href="#" class="vm-btn ve-first">Btn 1</a>
		<a href="#" class="vm-btn">Btn 2</a>
		<a href="#" class="vm-btn">Btn 3</a>
		<a href="#" class="vm-btn ve-last">Btn 4</a>
	</div>
</div>

<div class="vdemo-demo">
	<div class="vm-btn-grouph">
		<a href="#" class="vm-btn ve-first">Btn 1</a>
		<a href="#" class="vm-btn">Btn 2</a>
		<a href="#" class="vm-btn ve-last">Btn 3</a>
	</div>
</div>
<?php show_footer();?>
</body>
</html>