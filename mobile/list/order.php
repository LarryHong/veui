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
	<h2>Order List</h2>
	<p>排序列表</p>
	<pre class="vdemo-code">&lt;ol class="<strong>vm-list vm-list-order</strong>"&gt;
  &lt;li&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;List 1&lt;/a&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;List 2&lt;/a&gt;
  &lt;/li&gt;
&lt;/ol&gt;</pre>
</article>

<div class="vdemo-demo">
	<ol class="vm-list vm-list-order">
		<li>
			<a class="vm-list-item" href="#">Michael Jackson</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">The Beatles</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Elvis Presley</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Madonna</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Nana Mouskouri</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Cliff Richard</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">The Rolling Stones</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Mariah Carey</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Elton John</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Celine Dion</a>
		</li>
	</ol>
</div>
<?php show_footer();?>
</body>
</html>