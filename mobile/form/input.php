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
	<h2>Mix List</h2>
	<p>基础列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list-base</strong>"&gt;
	&lt;li&gt;
		&lt;a class="<strong>vm-list-item</strong>" href="#"&gt;List 1&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<input class="vf-text" type="text" name="" value="">
	<input class="vf-text-block" type="text" name="" value="">
</div>

<div class="vdemo-demo">
	<dl>
		<dt>Title:</dt>
		<dd><input class="vf-text" type="text" name="" value=""></dd>
	</dl>
</div>

<?php show_footer();?>
</body>
</html>