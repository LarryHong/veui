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
	<h2>Message List</h2>
	<p>消息列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list vm-list-message</strong>"&gt;
  &lt;li&gt;
    &lt;a class="<strong>vm-list-item</strong>" href="#"&gt;
      &lt;strong class="<strong>vm-list-hd</strong>"&gt;List 1&lt;/strong&gt;
      &lt;p class="<strong>vm-list-content</strong>"&gt;Content&lt;/p&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
	<ul class="vm-list vm-list-message">
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">James Cameron</strong>
				<p class="vm-list-content">(Kapuskasing, Ontario, Canadá; 16 de agosto de 1954) es un director, guionista y productor de cine canadiense, conocido por películas como The Terminator, Titanic y Avatar, siendo éstas dos últimas las que encabezan la lista de películas con más recaudación en taquilla en la historia. Ha sido ganador de tres premios Óscar, seis premios BAFTA, y cinco Globo de Oro.</p>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Peter Jackson</strong>
				<p class="vm-list-content">(n. 31 de octubre de 1961 en Pukerua Bay) es un guionista, productor y director de cine neozelandés, ganador de los premios Óscar, Globos de Oro y BAFTA.</p>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Gore Verbinski</strong>
				<p class="vm-list-content">(nacido el 16 de marzo de 1964 en Oak Ridge) es un guionista y director de cine norteamericano ganador del Oscar.</p>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Lee Unkrich</strong>
				<p class="vm-list-content">(8 de agosto de 1967)</p>
			</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>
