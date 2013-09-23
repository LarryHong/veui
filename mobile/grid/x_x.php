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
	<h2>分列结构</h2>
	<p>将宽度自主分成需要的宽度</p>
</article>

<!-- Import Code Start
CSS : ../css/all.css {Grids Style}
SCSS : ../scss/list.scss
Import Code End //-->
<div class="vdemo-demo">
	<div class="vp-cf">
	<!-- HTML Code Start //-->
<div class="vg-1-5">
	<div class="vdemo-block">Block 1/5</div>
</div>
		<div class="vg-4-5">
			<div class="vdemo-block">Block 4/5</div>
		</div>
		<div class="vg-2-5">
			<div class="vdemo-block">Block 2/5</div>
		</div>
		<div class="vg-3-5">
			<div class="vdemo-block">Block 3/5</div>
		</div>
		<div class="vg-1-4">
			<div class="vdemo-block">Block 1/4</div>
		</div>
		<div class="vg-3-4">
			<div class="vdemo-block">Block 3/4</div>
		</div>
		<div class="vg-1-3">
			<div class="vdemo-block">Block 1/3</div>
		</div>
		<div class="vg-2-3">
			<div class="vdemo-block">Block 2/3</div>
		</div>
		<div class="vg-1-2">
			<div class="vdemo-block">Block 1/2</div>
		</div>
	<!-- HTML Code End //-->
	</div>
</div>
<?php show_footer();?>
</body>
</html>