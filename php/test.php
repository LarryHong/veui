<?php
@include("html.class.php");
@include("mysql.class.php");


$action = isset($_GET['action']) ? $_GET['action'] : 'list';
$group = array('技术部', '市场部', '人力资源部');
$gender = array(
	'M' => '男',
	'F' => '女'
);


$form = array(
	'name' => array(
		'title' => '姓名',
		'type' => 'text',
		'required' => true
	),
	'gender' => array(
		'title' => '性别',
		'type' => 'radio',
		'options' => $gender,
		'required' => true
	),
	'start' => array(
		'title' => '入职时间',
		'type' => 'date',
		'required' => true
	),
	'group' => array(
		'title' => '部门',
		'type' => 'select',
		'options' => $group,
		'required' => true
	),
	'title' => array(
		'title' => '职位',
		'type' => 'text'
	),
	'mobile' => array(
		'title' => '手机号',
		'type' => 'mobile'
	),
	'mail' => array(
		'title' => '邮箱',
		'type' => 'mail'
	),
	'photo' => array(
		'title' => '头像',
		'type' => 'file'
	)
);

$form_html = VIMEE_HTML::form($form);

if($action == "list"){
	
}
if($action == "add"){
	
}
if($action == "save"){
	check($_POST)
}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Test Page</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="admin.css">
</head>
<body>
<header class="clearfix">
	<h1>Test Page</h1>
</header>
<?php
echo $form_html;
?>
<footer>
	&copy; 2009-2013 php.vimee.com
</footer>
</body>
</html>