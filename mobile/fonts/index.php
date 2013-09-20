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
	<h2>字体大小</h2>
	<p>提供标准、小、大三种字体大小</p>
	<pre class="vdemo-code"><em>&lt;!-- Standard //--&gt;</em>
&lt;div&gt;Content&lt;/div&gt;

<em>&lt;!-- Small //--&gt;</em>
&lt;div class="<strong>vf-small</strong>"&gt;Content&lt;/div&gt;

<em>&lt;!-- Large //--&gt;</em>
&lt;div class="<strong>vf-large</strong>"&gt;Content&lt;/div&gt;
</pre>
</article>

<div class="vdemo-demo">
	<div class="vm-head">Standard</div>
	<div class="vp-margin-5">Standard<br>标准字体</div>
	<div class="vm-head">Small</div>
	<div class="vp-margin-5 vf-small">Small<br>小号字体</div>
	<div class="vm-head">Large</div>
	<div class="vp-margin-5 vf-large">Large<br>加大字体</div>
</div>
<?php show_footer();?>
</body>
</html>