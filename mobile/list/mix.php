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
	<h2>Mix List</h2>
	<p>混合列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list vm-list-mix</strong>"&gt;
  &lt;li&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;
      &lt;img class="<strong>vm-list-img</strong>" src="image.jpg"&gt;
      &lt;strong class="<strong>vm-list-hd</strong>"&gt;List 1&lt;/strong&gt;
      &lt;em class="<strong>vm-list-desc</strong>"&gt;Value&lt;/em&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<ul class="vm-list vm-list-mix">
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_1.jpg" width="67">
			<strong class="vm-list-hd">Avatar</strong>
			<em class="vm-list-desc">James Cameron<br>$2779.6M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_2.jpg" width="67">
			<strong class="vm-list-hd">Titanic</strong>
			<em class="vm-list-desc">James Cameron<br>$1843.2M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_3.jpg" width="67">
			<strong class="vm-list-hd">The Lord of the Rings: The Return of the King</strong>
			<em class="vm-list-desc">Peter Jackson<br>$1119.1M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_4.jpg" width="67">
			<strong class="vm-list-hd">Pirates of the Caribbean: Dead Man's Chest</strong>
			<em class="vm-list-desc">Gore Verbinski<br>$1066.2M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_5.jpg" width="67">
			<strong class="vm-list-hd">Toy Story 3</strong>
			<em class="vm-list-desc">Lee Unkrich<br>$1062.6M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_6.jpg" width="67">
			<strong class="vm-list-hd">Alice in Wonderland</strong>
			<em class="vm-list-desc">Tim Burton<br>$1024.3M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_7.jpg" width="67">
			<strong class="vm-list-hd">The Dark Knight</strong>
			<em class="vm-list-desc">Christopher Nolan<br>$1001.9M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_8.jpg" width="67">
			<strong class="vm-list-hd">Harry Potter and the Sorcerer's Stone</strong>
			<em class="vm-list-desc">Chris Columbus<br>$974.7M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_9.jpg" width="67">
			<strong class="vm-list-hd">Pirates of the Caribbean: At World's End</strong>
			<em class="vm-list-desc">Gore Verbinski<br>$961.0M</em>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
			<img class="vm-list-img" src="../images/movie_10.jpg" width="67">
			<strong class="vm-list-hd">Harry Potter and the Order of the Phoenix</strong>
			<em class="vm-list-desc">David Yates<br>$938.5M</em>
			</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>