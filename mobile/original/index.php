<?php
include_once("../common.php");
include_once($config['include_path']."block.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<?php show_meta();?>
<link rel="stylesheet" href="<?php echo $config['css_path'];?>format.css" type="text/css">
</head>
<body>
<?php show_header();?>

<h2 class="vm-head">Original Heading</h2>
<div class="vdemo-mod">
	<h1>H1 Heading</h1>
	<h2>H2 Heading</h2>
	<h3>H3 Heading</h3>
	<h4>H4 Heading</h4>
	<h5>H5 Heading</h5>
	<h6>H6 Heading</h6>
</div>

<h2 class="vm-head">Original Nav</h2>
<div class="vdemo-mod">
	<nav>
		<a href="#">Nav 1</a>
		<a href="#">Nav 2</a>
		<a href="#">Nav 3</a>
		<a href="#">Nav 4</a>
	</nav>
</div>

<h2 class="vm-head">Original String</h2>
<div class="vdemo-mod" style="line-height:1.5em;">
	&lt;strong&gt; <strong>Strong</strong><br>
	&lt;em&gt; <em>Emphasis</em><br>
	&lt;small&gt; <small>Small</small><br>
	&lt;span&gt; <span>Span</span><br>
	&lt;del&gt; <del>Delete</del><br>
	&lt;ins&gt; <ins>Insert</ins><br>
	&lt;mark&gt; <mark>mark</mark><br>
	&lt;dfn&gt; <dfn>Dfn</dfn><br>
	&lt;a&gt; <a>Anchor</a><br>
	&lt;a href="#"&gt; <a href="#">a+href</a><br>
	&lt;addr&gt; <abbr title="etcetera">etc.</abbr><br>
	&lt;sub&gt; <sub>subscript</sub><br>
	&lt;sup&gt; <sup>superscript</sup><br>
	&lt;cite&gt; <cite>The Scream</cite> by Edward Munch. Painted in 1893.<br>
	&lt;address&gt; <address>Beijing<br>China</address>
</div>

<h2 class="vm-head">Original Content</h2>
<div class="vdemo-mod">
	<article>
		<hgroup>
			<h2>Article Title</h2>
			<h3>Article Title2</h3>
		</hgroup>
		<p>
			This is some text in a very short paragraph.
		</p>
		<section>
			<h4>Section Title</h4>
			<p>This is Section</p>
		</section>
		<figure>
			<img src="http://store.storeimages.cdn-apple.com/2545/as-images.apple.com/is/image/AppleInc/shelf-home-imac?wid=119&hei=109&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp" alt="iMac">
			<figcaption>iMac (Figcaption)</figcaption>
		</figure>
		<blockquote>
			Blockquote
		</blockquote>
		<q>Short quotation</q>
		<article>
			<h3>Article Title</h3>
			<p>This is Article</p>
		</article>
	</article>
	<aside>
		<h3>Aside Title</h3>
		<p>
			<bdo dir="ltr">Here is some text</bdo>
			<br>
			<bdo dir="rtl">Here is some text</bdo>
		</p>
	</aside>
</div>

<h2 class="vm-head">Original Table</h2>
<div class="vdemo-mod">
<table>
	<caption>Table Caption</caption>
	<thead>
		<tr>
			<th>Table Head1</th>
			<th>Table Head2</th>
			<th>Table Head3</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Table Head2</th>
			<td>Table Body2</td>
			<td>Table Body3</td>
		</tr>
		<tr>
			<th>Table Head3</th>
			<td>Table Body2</td>
			<td>Table Body3</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3">Table Foot</td>
		</tr>
	</tfoot>
</table>
</div>

<h2 class="vm-head">Original UL</h2>
<div class="vdemo-mod">
	<ul>
		<li>Unordered list item</li>
		<li>Unordered list item</li>
	</ul>
</div>

<h2 class="vm-head">Original OL</h2>
<div class="vdemo-mod">
	<ol>
		<li>Ordered list item</li>
		<li>Ordered list item</li>
	</ol>
</div>

<h2 class="vm-head">Original DL</h2>
<div class="vdemo-mod">
	<dl>
		<dt>Definition term</dt>
		<dd>I'm the definition text</dd>
		<dt>Definition term</dt>
		<dd>I'm the definition text</dd>
	</dl>
</div>

<h2 class="vm-head">Original Form</h2>
<div class="vdemo-mod" style="line-height:2em;">
	<form method="post" action="#">
		Text: <input type="text" name="test" value=""><br>
		Password: <input type="password" name="password" value=""><br>
		file: <input type="file" name="file" value=""><br>
		date: <input type="date" name="date" value=""><br>
		Keygen: <keygen name="keygen"><br>
		Select: <select name="select">
			<optgroup label="Group 1">
				<option value="1-1">Value 1-1</option>
				<option value="1-2">Value 1-2</option>
			</optgroup>
			<optgroup label="Group 2">
				<option value="2-1">Value 2-1</option>
				<option value="2-2">Value 2-2</option>
			</optgroup>
		</select><br>
		CheckBox: <label><input checked type="checkbox" name="checkbox" value="1"> 1</label>&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="checkbox" value="2"> 2</label><br>
		Radio: <label><input type="radio" name="radio" value="1"> 1</label>&nbsp;&nbsp;&nbsp;<label><input checked type="radio" name="radio" value="2"> 2</label><br>
		Textarea: <textarea name=""></textarea><br>
		<button type="submit">Submit</button> <button type="reset">Reset</button>
	</form>
</div>

<h2 class="vm-head">Original Fieldset</h2>
<div class="vdemo-mod">
	<fieldset>
		<legend>Legend</legend>
		Content
	</fieldset>
</div>

<h2 class="vm-head">Original Pre</h2>
<div class="vdemo-mod">
	<pre>
pre space1
pre  space2
pre   space3
	</pre>
</div>

<h2 class="vm-head">Original Code</h2>
<div class="vdemo-mod">
	<code>
code space1
code  space2
code   space3
	</code>
</div>

<h2 class="vm-head">Original Ruby</h2>
<div class="vdemo-mod">
	<ruby>
	漢 <rt><rp>(</rp>ㄏㄢˋ<rp>)</rp></rt>
	</ruby>
</div>

<?php show_footer();?>
</body>
</html>