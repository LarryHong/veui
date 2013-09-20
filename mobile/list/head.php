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
	<h2>Head</h2>
	<p>列表头</p>
	<pre class="vdemo-code">&lt;div class="<strong>vm-head</strong>"&gt;Head&lt;/div&gt;</pre>
</article>

<div class="vdemo-demo">
	<div class="vm-head">The record company</div>
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
	</ul>
	<div class="vm-head">The film company</div>
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">Twentieth Century Fox</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Warner Bros.</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Columbia Pictures Corp.</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Paramount Pictures, Inc.</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Universal Picture Co.</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Metro-Goldwyn-Mayer</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>