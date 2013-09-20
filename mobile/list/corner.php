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
	<h2>Corner List</h2>
	<p>圆角列表</p>
	<pre class="vdemo-code">&lt;ul class="vm-list <strong>vm-list-corner</strong>"&gt;
  &lt;li&gt;
    &lt;a class="vm-list-item <strong>vm-list-first</strong>" href="#"&gt;List 1&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class="vm-list-item" href="#"&gt;List 2&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class="vm-list-item <strong>vm-list-last</strong>" href="#"&gt;List 3&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<ul class="vm-list vm-list-mix vm-list-corner">
		<li>
			<a class="vm-list-item ve-one" href="#">
				<img class="vm-list-img" src="../images/album_1.png" width="80">
				<strong class="vm-list-hd">Falling Into You</strong>
				<em class="vm-list-desc">Céline Dion</em>
			</a>
		</li>
	</ul>
</div>

<div class="vdemo-demo vm-list-corner">
	<div class="vm-head ve-first">The record company</div>
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
	<div class="vm-head">Album</div>
	<ul class="vm-list vm-list-mix">
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/album_1.png" width="80">
			<strong class="vm-list-hd">Falling Into You</strong>
			<em class="vm-list-desc">Céline Dion</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/album_14.png" width="80">
			<strong class="vm-list-hd">Let's Talk About Love</strong>
			<em class="vm-list-desc">Céline Dion</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/album_3.png" width="80">
			<strong class="vm-list-hd">My Love Essential Collection</strong>
			<em class="vm-list-desc">Céline Dion</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/album_5.png" width="80">
			<strong class="vm-list-hd">The Colour Of My Love</strong>
			<em class="vm-list-desc">Céline Dion</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/album_2.png" width="80">
			<strong class="vm-list-hd">A New Day Has Come</strong>
			<em class="vm-list-desc">Céline Dion</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item ve-last" href="#">
			<img class="vm-list-img" src="../images/album_17.png" width="80">
			<strong class="vm-list-hd">Taking Chances</strong>
			<em class="vm-list-desc">Céline Dion</em>
			</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>