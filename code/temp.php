<?php
@include("code_analysis.php");
$file = "../mobile/grid/x_x.php";
$ca = new VIMEE_CODEANALSIS($file);
$html_code = $ca->get_html();
$improt_code = $ca->get_import();
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>VEUI Code Framework</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://yuilibrary.com/vendor/prettify/prettify-min.css" />
<style>
/*Reset Start:{*/
html{color:#000;background:#FFF}
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0}
table{border-collapse:collapse;border-spacing:0}
fieldset,img{border:0}
address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal}
ol,ul{list-style:none}
caption,th{text-align:left}
h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal}
q:before,q:after{content:''}
abbr,acronym{border:0;font-variant:normal}
sup{vertical-align:text-top}
sub{vertical-align:text-bottom}
input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit;resize:none}
input,textarea,select{*font-size:100%}
legend{color:#000;display:none}
.cf{zoom:1}
.cf:after{content:'.';visibility:hidden;display:block;height:0;clear:both}
/*Reset End:}*/

body {
	font-family: Verdana, Microsoft YaHei;
}
#hd {
	height: 50px;
	padding: 0 10px;
}
h1 {
	font-size: 26px;
	padding: 8px 0;
}

#nav {
	border: 0 solid #ccc;
	border-width: 1px 0;
	padding: 5px 0;
}
#nav li {
	float: left;
	margin: 0 10px;
} 

#demo {
	float: left;
	margin-right: 10px;
}
#demo legend {
	display: block;
}
#demo iframe {
	width: 320px;
	height: 480px;
	border: 1px solid #ccc;
}

#side {
	float: left;
	width: 190px;
	padding-top: 10px;
}
#lnav ul {
	padding-left: 10px;
}
#main {
	float: right;
	width: 100%;
	margin-right: -210px;
	padding-top: 10px;
}
#main h2 {
	font-size: 20px;
	margin-bottom: 10px;
}
#code {
	width: 500px;
}
#code li {
	float: left;
	margin-right: 10px;
}

#ft {
	clear: both;
	padding-top: 20px;
}
</style>
</head>
<body>
<div id="doc">
<header id="hd">
	<h1>Meituan Mobile Framework</h1>
</header>

<nav id="nav">
	<ul class="cf">
		<li><a href="#">美团</a></li>
		<li><a href="#">猫眼</a></li>
		<li><a href="#">研究</a></li>
		<li><a href="#">创意</a></li>
	</ul>	
</nav>

<section>
	<div id="main">
		<div class="cont">
			<h2>Gride</h2>
			<fieldset id="demo">
				<legend>Demo</legend>
				<div>
					<iframe src="<?php echo $file ?>"></iframe>
				</div>
			</fieldset>
			<fieldset id="code">
				<legend>Code</legend>
				<div>
					<ul class="cf">
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
						<li><a href="#">SCSS</a></li>
						<li><a href="#">Java Script</a></li>
					</ul>
						<pre class="code prettyprint"><?php echo htmlspecialchars($html_code)?></pre>
					<?php
					foreach($improt_code as $v){
						echo '<pre class="code prettyprint">'.htmlspecialchars($v['code']).'</pre>';
					}
					?>
				</div>
			</fieldset>
		</div>
	</div>
	<div id="side">
		<div id="lnav">
			<ul>
				<li><a href="#">Base</a></li>
				<li><a href="#">Gride</a></li>
				<li>
					<h4>List</h4>
					<ul>
						<li><a href="#">Basic List</a></li>
						<li><a href="#">Expend List</a></li>
						<li><a href="#">Order List</a></li>
						<li><a href="#">Message List</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</section>

<footer id="ft">
	&copy; 2011-2013 code.vimee.com
</footer>
</div>
<script src="http://yuilibrary.com/vendor/prettify/prettify-min.js"></script>
<script>prettyPrint();</script>
</body>
</html>