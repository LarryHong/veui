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
	<h2>Images List</h2>
	<p>图片列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list vm-list-imgs</strong>"&gt;
  &lt;li&gt;
    &lt;img class="<strong>vm-list-img</strong>" src="../image.jpg"&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<ul class="vm-list vm-list-imgs">
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_1.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_2.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_3.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_4.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_5.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_6.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_7.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_8.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_9.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_10.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_11.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_12.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_13.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_14.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_15.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_16.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_17.png">
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_18.png">
			</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>