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
	<h2>Basic List</h2>
	<p>基础列表</p>
	<pre class="vdemo-code">&lt;ul class="<strong>vm-list-base</strong>"&gt;
	&lt;li&gt;
		&lt;a class="<strong>vm-list-item</strong>" href="#"&gt;List 1&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;</pre>
</article>

<div class="vdemo-demo">
<i class="vm-icon-round vm-icon-plus">Plus</i>
<i class="vm-icon-round vm-icon-minus">Minus</i>
<i class="vm-icon-round vm-icon-delete">Delete</i>
<i class="vm-icon-round vm-icon-right">Right</i>
<i class="vm-icon-round vm-icon-arrowl">Arrow Left</i>
<i class="vm-icon-round vm-icon-arrowr">Arrow Right</i>
<i class="vm-icon-round vm-icon-arrowu">Arrow Up</i>
<i class="vm-icon-round vm-icon-arrowd">Arrow Down</i>
<i class="vm-icon-round vm-icon-refresh">Refresh</i>
<i class="vm-icon-round vm-icon-forward">Forward</i>
<i class="vm-icon-round vm-icon-back">Back</i>
<i class="vm-icon-round vm-icon-grid">Grid</i>
<i class="vm-icon-round vm-icon-setting">Setting</i>
<i class="vm-icon-round vm-icon-star">Star</i>
<i class="vm-icon-round vm-icon-alert">Alert</i>
<i class="vm-icon-round vm-icon-info">Info</i>
<i class="vm-icon-round vm-icon-home">Hmoe</i>
<i class="vm-icon-round vm-icon-search">Search</i>
</div>
<?php show_footer();?>
</body>
</html>