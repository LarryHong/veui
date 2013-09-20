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

<div class="vdemo-demo" id="list">
	<div class="vm-head vj-hd">A</div>
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Adele</a>
		</li>
	</ul>
	<div class="vm-head vj-hd">B</div>
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Britney Spears</a>
		</li>
	</ul>
	<div class="vm-head vj-hd">C</div>
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">Carly Rae Jepsen</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
<script>
$("#list").vwHeaderTop();
</script>
</body>
</html>