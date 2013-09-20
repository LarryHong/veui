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
	<h2>两列结构</h2>
	<p>将宽度平分为两列，一共有3中方法，可以根据需要选择</p>
	<pre class="vdemo-code"><em>&lt;!-- Class:vg-2&amp;vg-item //--&gt;</em>
&lt;div class="<strong>vg-2</strong>"&gt;
  &lt;div class="<strong>vg-item</strong>"&gt;Content&lt;/div&gt;
  &lt;div class="<strong>vg-item</strong>"&gt;Content&lt;/div&gt;
&lt;/div&gt;

<em>&lt;!-- Class:vg-1-2 //--&gt;</em>
&lt;div class="<strong>vp-cf</strong>"&gt;
  &lt;div class="<strong>vg-1-2</strong>"&gt;Content&lt;/div&gt;
  &lt;div class="<strong>vg-1-2</strong>"&gt;Content&lt;/div&gt;
&lt;/div&gt;

<em>&lt;!-- UL Class:vg-2 //--&gt;</em>
&lt;ul class="<strong>vg-2</strong>"&gt;
  &lt;li&gt;Content&lt;/li&gt;
  &lt;li&gt;Content&lt;/li&gt;
&lt;/ul&gt;

<em>&lt;!-- OL Class:vg-2 //--&gt;</em>
&lt;ol class="<strong>vg-2</strong>"&gt;
  &lt;li&gt;Content&lt;/li&gt;
  &lt;li&gt;Content&lt;/li&gt;
&lt;/ol&gt;
</pre>
</article>

<div class="vdemo-demo">
	<div class="vm-head">Class:vg-2&amp;vg-item</div>
	<div class="vg-2">
		<div class="vg-item">
			<div class="vdemo-block">Block 1/2</div>
		</div>
		<div class="vg-item">
			<div class="vdemo-block">Block 1/2</div>
		</div>
	</div>
	<div class="vm-head">Class:vg-1-2</div>
	<div class="vp-cf">
		<div class="vg-1-2">
			<div class="vdemo-block">Block 1/2</div>
		</div>
		<div class="vg-1-2">
			<div class="vdemo-block">Block 1/2</div>
		</div>
	</div>
	<div class="vm-head">UL&amp;OL Class:vg-2</div>
	<ul class="vg-2">
		<li><div class="vdemo-block">Block 1/2</div></li>
		<li><div class="vdemo-block">Block 1/2</div></li>
	</ul>
	<ol class="vg-2">
		<li><div class="vdemo-block">Block 1/2</div></li>
		<li><div class="vdemo-block">Block 1/2</div></li>
	</ol>
</div>
<?php show_footer();?>
</body>
</html>