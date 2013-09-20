<?php
//Head头
@header("Expires: -1");
@header("Cache-Control: no-cache, must-revalidate");
@header("Pragma: no-cache");

//调试
define('debug', false);

//得到配置文件
include("config.php");

mb_internal_encoding('UTF-8');

date_default_timezone_set($config['time_zone']);
?>