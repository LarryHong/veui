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
	<h2>Icons</h2>
	<p>列表图标</p>
</article>

<div class="vdemo-demo">
	<div class="vm-head vp-cicon vp-cicon-arrowd">
		Simple Icon (CSS3)
	</div>
	<ul class="vm-list">
		<li>
			<a class="vm-list-item vp-cicon vp-cicon-grey-arrowr" href="#">
				Universal Music Group
			</a>
		</li>
	</ul>
	<div class="vm-head">
		Right Icons (Image)
		<i class="vp-icon-round vp-icon-minus vp-pos-right">Minus</i>
	</div>
	<ul class="vm-list">
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">WLAN</strong>
				<span class="vm-list-value">honglei-wifi</span>
				<i class="vp-icon-round vp-icon-arrowr vp-pos-right">Right</i>
			</a>
		</li>
		<li>
			<a class="vm-list-item" href="#">
				Universal Music Group
				<img class="vp-pos-right vp-icon-ft10" src="../../imgs/icon_prohibit.svg" alt="Prohibit">
			</a>
		</li>
	</ul>
	<ul class="vm-list vm-list-message">
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Peter Jackson</strong>
				<p class="vm-list-content">(n. 31 de octubre de 1961 en Pukerua Bay) es un guionista, productor y director de cine neozelandés, ganador de los premios Óscar, Globos de Oro y BAFTA.</p>
				<i class="vp-icon vp-icon-grey-arrowr vp-pos-right">Right</i>
			</a>
		</li>
	</ul>
	<ul class="vm-list vm-list-mix">
		<li>
			<a class="vm-list-item" href="#">
				<img class="vm-list-img" src="../images/album_14.png" width="80">
				<strong class="vm-list-hd">Let's Talk About Love</strong>
				<em class="vm-list-desc">Céline Dion</em>
				<img class="vp-pos-right vp-icon-ft10" src="../../imgs/icon_star.svg" alt="Star">
			</a>
		</li>
	</ul>
	<div class="vm-head">
		Left Icons
		<i class="vp-icon-round vp-icon-plus vp-pos-right">Plus</i>
	</div>
	<ul class="vm-list vm-list-message vm-list-icons-left">
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Peter Jackson</strong>
				<p class="vm-list-content">(n. 31 de octubre de 1961 en Pukerua Bay) es un guionista, productor y director de cine neozelandés, ganador de los premios Óscar, Globos de Oro y BAFTA.</p>
				<i class="vp-icon-dot vp-pos-left">·</i>
			</a>
		</li>
	</ul>
	<ul class="vm-list vm-list-icons-left">
		<li>
			<a class="vm-list-item" href="#">
				Universal Music Group
				<img class="vp-pos-left vp-icon-ft10" src="../../imgs/icon_star.svg" alt="Star">
			</a>
		</li>
	</ul>
	<ul class="vm-list vm-list-icon-left">
		<li>
			<a class="vm-list-item" href="#">
				Universal Music Group
				<img class="vp-pos-left vp-icon-square" src="../../imgs/icon_brightness.png" alt="Brightness" width="30">
			</a>
		</li>
	</ul>
	<div class="vm-head">
		L&amp;R Icons
		<i class="vm-icon-round vm-icon-star vm-pos-right">Star</i>
	</div>
	<ul class="vm-list vm-list-message vm-list-icons-left">
		<li>
			<a class="vm-list-item" href="#">
				<strong class="vm-list-hd">Peter Jackson</strong>
				<p class="vm-list-content">(n. 31 de octubre de 1961 en Pukerua Bay) es un guionista, productor y director de cine neozelandés, ganador de los premios Óscar, Globos de Oro y BAFTA.</p>
				<i class="vp-icon-dot vp-pos-left">·</i>
				<i class="vp-icon-round vp-icon-arrowr vp-pos-right">Right</i>
			</a>
		</li>
	</ul>
	<ul class="vm-list vm-list-icon-left">
		<li>
			<a class="vm-list-item" href="#">
				Universal Music Group
				<img class="vp-pos-left vp-icon-square" src="../../imgs/icon_brightness.png" alt="Brightness" width="30">
				<i class="vp-icon vp-icon-grey-arrowr vp-pos-right">Right</i>
			</a>
		</li>
	</ul>
</div>
<?php show_footer();?>
</body>
</html>