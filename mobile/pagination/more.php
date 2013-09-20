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
	<h2>Pagination Base</h2>
	<p>标准翻页</p>
	<pre class="vdemo-code">&lt;div class="<strong>vm-pagination</strong>"&gt;
  &lt;a class="<strong>vm-pagination-prev</strong>" href="#"&gt;Previous&lt;/a&gt;
  &lt;a class="<strong>vm-pagination-next</strong>" href="#"&gt;Next&lt;/a&gt;
  &lt;span class="<strong>vm-pagination-info</strong>"&gt;1/4999&lt;/span&gt;
&lt;/div&gt;</pre>
</article>

<div class="vdemo-demo">
	<div class="vm-pagination">
		<a class="vm-pagination-first" href="#">First</a>
		<a class="vm-pagination-prev" href="#">Previous</a>
		<span class="vm-pagination-info" class="">1/4999</span>
		<a class="vm-pagination-next" href="#">Next</a>
		<a class="vm-pagination-last" href="#">Last</a>
	</div>
</div>
<?php show_footer();?>
</body>
</html>