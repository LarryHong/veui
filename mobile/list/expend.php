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
	<h2>Expend List</h2>
	<p>扩展列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list</strong>"&gt;
  &lt;li&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;
      &lt;strong class="<strong>vm-list-hd</strong>"&gt;List 1&lt;/strong&gt;
      &lt;em class="<strong>vm-list-desc</strong>"&gt;Desc&lt;/em&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">The King's Speech</strong>
				<em class="vm-list-desc">Best Picture</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Tom Hooper</strong>
				<em class="vm-list-desc">Best Director</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Colin Firth</strong>
				<em class="vm-list-desc">Best Actor</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Natalie Portman</strong>
				<em class="vm-list-desc">Best Actress</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">刘德华</strong>
				<em class="vm-list-desc">最佳男主角</em>
			</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>
