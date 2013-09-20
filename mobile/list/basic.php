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
	<h2>Basic List</h2>
	<p>基础列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list</strong>"&gt;
  &lt;li&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;List 1&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;List 2&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">Universal Music Group</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Sony Music Entertainment</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Warner Music Group</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">EMI Group</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">滚石唱片</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>