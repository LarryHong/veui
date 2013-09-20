<?php
function show_meta(){
	global $config;
	echo <<<code
<title>VEUI Mobile Framework</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name=”format-detection” content=”telephone=no”>
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<!--
<link rel="apple-touch-icon" href="/mobile/imgs/ficon.png">
<link rel="apple-touch-startup-image" href="/mobile/imgs/start.png">
//-->
<link rel="stylesheet" href="{$config['css_path']}all.css">

code;
}

function show_header(){
	echo <<<code
<header class="vm-hd">
	<!--<a href="index.html" class="vmob-hd-left vmob-btn-hoop vmob-btn-left"><span class="vmob-btn-round vmob-icon-home">Home</span></a>//-->
	<h1>VEUI Mobile Framework</h1>
</header>

code;
}

function show_footer(){
	global $config;
	echo <<<code
<footer class="vm-ft">
	&copy; 2011-2012 Framework.vimee.com
</footer>
<script src="{$config['js_path']}/zepto-ck.js"></script>
<script src="{$config['js_path']}/base-ck.js"></script>

code;
}
?>