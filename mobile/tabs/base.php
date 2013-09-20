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
	<h2>标签内容</h2>
	<p>可以自由切换各个标签的内容</p>
	<pre class="vdemo-code">
&lt;div class="<strong>vg-2</strong>"&gt;
  &lt;div class="<strong>vg-item</strong>"&gt;Content&lt;/div&gt;
  &lt;div class="<strong>vg-item</strong>"&gt;Content&lt;/div&gt;
&lt;/div&gt;
</pre>
</article>

<div class="vdemo-demo">
	<div class="vm-tabs-hd">
		<ul class="vg-4">
			<li>
				<a class="vm-tabs-hd-item vc-selected" href="">Tab1</a>
			</li>
			<li>
				<a class="vm-tabs-hd-item" href="">Tab2</a>
			</li>
			<li>
				<a class="vm-tabs-hd-item" href="">Tab3</a>
			</li>
		</ul>
	</div>
	<div class="vm-tabs-bd">
		<div class="vm-tabs-bd-item vc-selected">
			<div class="vdemo-block">Content1</div>
		</div>
		<div class="vm-tabs-bd-item">
			<div class="vdemo-block">Content2</div>
		</div>
		<div class="vm-tabs-bd-item">
			<div class="vdemo-block">Content3</div>
		</div>
	</div>
</div>
<?php show_footer();?>
</body>
</html>