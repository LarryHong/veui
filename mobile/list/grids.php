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
	<div class="vm-head">
		直辖市
	</div>
	<ul class="vm-list vm-list-grid vg-3">
		<li>
			<a class="vm-list-item" href="#">北京</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">上海</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">天津</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">重庆</a>
		</li>
	</ul>
	<div class="vm-head">
		浙江省
	</div>
	<ul class="vm-list vm-list-grid vg-3">
		<li>
			<a class="vm-list-item" href="#">杭州</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">宁波</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">温州</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">台州</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">绍兴</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">嘉兴</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">湖州</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">金华</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">衢州</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">丽水</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">舟山</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>