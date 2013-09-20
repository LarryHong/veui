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
	<h2>Key&amp;Value List</h2>
	<p>Key对Value列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list</strong>"&gt;
  &lt;li&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;
      &lt;strong class="<strong>vm-list-hd</strong>"&gt;List 1&lt;/strong&gt;
      &lt;span class="<strong>vm-list-value</strong>"&gt;Value&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Auto Play</strong>
				<span class="vm-list-value">No</span>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">WLAN</strong>
				<span class="vm-list-value">honglei-wifi honglei-wifi honglei-wifi honglei-wifi honglei-wifi honglei-wifi</span>
			</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>