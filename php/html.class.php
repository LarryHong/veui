<?php
/**
 * VIMEE PHP MVC framework
 * http://php.vimee.com/
 *
 * Copyright (c) 2011 Vimee
 * Licensed under the GPL licenses.
 *
 * @author HongLei<honglei@live.com>
 * @module VIMEE_HTML
 * @version 1.1.1
 */
class VIMEE_HTML{
	/**
	 * 配置
	 */
	private static $config = array(
		//分页配置
		'page' => array(
			'PREVIOUS_TEXT' => 'Previous',
			'NEXT_TEXT' => 'Next',
			'CLASS_PREF' => 'page-',
			'ID' => '',
			'STYLE' => ''
		),
		//表格配置
		'table' => array(
			'CLASS_PREF' => 'table-',
			'ID' => '',
			'STYLE' => ''
		),
		//表单配置
		'form' => array(
			'CLASS_PREF' => 'form-',
			'ID' => '',
			'SUBMIT_TEXT' => 'Submit',
			'RESET_TEXT' => 'Reset',
			'COMPLETE' => true,
			'STYLE' => '',
			'UPFILE' => false,
			'TARGET' => false
		),
		//input配置
		'input' => array(
			'CLASS' => 'input-text',
			'ID' => '',
			'DISABLED' => false,
			'STYLE' => '',
			'MIN' => '',
			'MAX' => '',
			'STEP' => '',
			'SIZE' => '',
			'CHECK' => '',
			'PLUS' => '',
			'REQUIRED' => false,
			'PLACEHOLDER' => '',
			'AUTOCOMPLETE' => ''
		),
		//input_string配置
		'input_string' => array(
			'CLASS' => 'input-string'
		),
		//File配置
		'file' => array(
			'CLASS' => 'input-file',
			'ID' => '',
			'DISABLED' => false,
			'STYLE' => '',
			'REQUIRED' => false
		),
		//select配置
		'select' => array(
			'CLASS' => 'input-text',
			'ID' => '',
			'DISABLED' => false,
			'STYLE' => '',
			'SIZE' => '',
			'CHECK' => '',
			'REQUIRED' => false,
			'MULTIPLE' => ''
		),
		//Textarea配置
		'textarea' => array(
			'CLASS' => 'input-text',
			'ID' => '',
			'DISABLED' => false,
			'STYLE' => '',
			'ROWS' => 5,
			'COLS' => 50,
			'CHECK' => '',
			'REQUIRED' => false
		),
		//Radio配置
		'radio' => array(
			'CLASS' => 'input-radio-area clearfix',
			'ID' => '',
			'DISABLED' => false,
			'STYLE' => '',
			'REQUIRED' => false
		),
		//Checkbox配置
		'checkbox' => array(
			'CLASS' => 'input-checkbox-area clearfix',
			'ID' => '',
			'DISABLED' => false,
			'STYLE' => '',
			'REQUIRED' => false
		),
		//Filebox配置
		'filebox' => array(
			'CLASS' => 'input-filebox',
			'PLUS' => 'filebox',
			'ID' => '',
			'URL' => '',
			'DISABLED' => false,
			'STYLE' => '',
			'REQUIRED' => false
		),
		//Tabs配置
		'tabs' => array(
			'CLASS_PREF' => 'tabs-',
			'ID' => '',
			'STYLE' => ''
		),
		//Nav配置
		'menu' => array(
			'CLASS_PREF' => 'menu-',
			'ID' => '',
			'STYLE' => ''
		)
	);
	/**
	 * 日历配置文件
	 */
	private static $config_calendar = array(
		'MONTHS' => array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
		'WEEKS' => array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'),
		'WEEK_BEGIN' => 0,
		'CLASS_PREF' => 'cal',
		'ID' => ''
	);
	/**
	 * 初始化配置文件
	 * 
	 * @param string $type 配置名称
	 * @param array $config 配置文件
	 * @access private
	 */
	public static function set_config($type, $config){
		if(!array_key_exists($type, self::$config)) return;
		self::$config[$type] = self::format_config($type, $config);
	}
	/**
	 * 格式化配置文件
	 * 
	 * @param string $type 配置文件类型
	 * @param array $config 新的配置文件
	 * @access private
	 * @return array Or boolean 最后生成的配置或则失败
	*/
	private static function format_config($type, $config){
		if(array_key_exists($type, self::$config)){
			$out = self::$config[$type];
			foreach($config as $k => $v){
				if(array_key_exists(strtoupper($k), $out)){
					$out[strtoupper($k)] = $v;
				}
			}
			return $out;
		}else{
			return false;
		}
	}
	/**
	* 得到HTML中的属性
	* 
	* @param string $key 配置的名称
	* @param array $config 配置文件
	* @access private
	*/
	private static function get_atts($config){
		$atts = array('id', 'class', 'style', 'align', 'width', 'height', 'size', 'rows', 'cols', 'min', 'max', 'step', 'disabled', 'placeholder', 'autocomplete', 'multiple', 'target');
		$datts = array('check', 'plus', 'required', 'url');
		$att = '';
		foreach($config as $k => $v){
			if(in_array(strtolower($k), $atts) && $v!=="" && $v!==false){
				if($v !== true){
					$att .= ' '.strtolower($k).'="'.$v.'"';
				}else{
					$att .= ' '.strtolower($k);
				}
			}else if(in_array(strtolower($k), $datts) && $v!==""){
				$att .= ' data-'.strtolower($k).'="'.$v.'"';
			}
		}
		return $att;
	}
	/**
	* 将数组转化成value对html的状态
	* 
	* @param string $k 数组中的key
	* @param string|array $v 数组中的value
	* @return array 转换后的结果
	* @access private
	*/
	private static function kv2vh($k, $v){
		if(!is_array($v) && is_numeric($k)){
			$v = array(
				'value' => $v,
				'html' => $v
			);
		}else if(!is_array($v)){
			$v = array(
				'value' => $k,
				'html' => $v
			);
		}else{
			if(isset($v['html'])){
				if(!isset($v['value'])) $v['value'] = $v['html'];
			}else{
				return false;
			}
		}
		return $v;
	}
	
	/**
	 * 分页生成
	 *
	 * @param int $page 当前页面页码
	 * @param int $total 页面总数
	 * @param string $url 翻页的URL前缀；如果以"="号结尾则直接将页面数字加在后面，其他情况将添加"page="
	 * @param int $page_size 每页显示的分页数
	 * @param array $config 分页的配置，具体配置参考上方$config['page']
	 * @return string 分页的HTML代码
	 * @access public
	 */
	public static function page($page=1, $total=1, $url_prefix='', $page_size=0, $config=array()){
		//得到配置
		$conf = self::format_config('page', $config);
		
		//取得显示的最大和最小页码
		if($page_size == 0){
			$page_min = 1;
			$page_max = $total;
		}else{
			$page_size--;
			$page_min = $page - floor($page_size/2) > 1 ? $page - floor($page_size/2) : 1;
			if($page_min + $page_size < $total){
				$page_max = $page_min + $page_size;
			}else{
				$page_max = $total;
				$page_min = $page_max - $page_size > 1 ? $page_max - $page_size : 1;
			}
		}
		
		//翻页连接的处理
		$url = $url_prefix;
		if(substr($url_prefix, -1, 1) == "#"){
			$url .= 'page=';
		}else if(substr($url_prefix, -1, 1) != "="){
			$url .= strpos($url_prefix, '?') === false ? '?page=' : '&page=';
		}
		
		//生成HTML代码
		$html = '';
		$html .= $page > 1 ? '<a class="'.$conf['CLASS_PREF'].'prev" href="'.$url.($page-1).'">'.$conf['PREVIOUS_TEXT'].'</a>' : '<em class="'.$conf['CLASS_PREF'].'prev">'.$conf['PREVIOUS_TEXT'].'</em>';
		$html .= $page_min > 2 ? '<a href="'.$url.'1">1</a><em>...</em>' : '';
		$html .= $page_min == 2 ? '<a href="'.$url.'1">1</a>' : '';
		for($i=$page_min; $i<=$page_max; $i++){
			if($i != $page){
				$html .= '<a href="'.$url.$i.'">'.$i.'</a>';
			}else{
				$html .= '<strong>'.$i.'</strong>';
			}
		}
		$html .= $page_max < $total-1 ? '<em>...</em><a href="'.$url.$total.'">'.$total.'</a>' : '';
		$html .= $page_max == $total-1 ? '<a href="'.$url.$total.'">'.$total.'</a>' : '';
		$html .= $page < $total ? '<a class="'.$conf['CLASS_PREF'].'next" href="'.$url.($page/1+1).'">'.$conf['NEXT_TEXT'].'</a>' : '<em class="'.$conf['CLASS_PREF'].'next">'.$conf['NEXT_TEXT'].'</em>';
		
		$atts = self::get_atts($conf);
		$html = '<div'.$atts.' class="'.$conf['CLASS_PREF'].'box">'.$html.'</div>';
		return $html;
	}
	/**
	 * 日历
	 *
	 * @param array $config 
	 * @access public
	 */
	public function calendar($year=0, $month=0, $data=array(), $config=''){
		if($month < 1 || $month > 12) return;
		$conf = $this->calendar_config;
		$days = date("t", strtotime($year.'-'.$month));
		$begin = date("w", strtotime($year.'-'.$month.'-1'));
		$html = '';
		//ÏÔÊ¾ÐÇÆÚ
		$html .= '<thead>'."\n".'<tr>'."\n";
		$weeks = $conf['WEEKS'];
		if($conf['WEEK_BEGIN'] == 1) array_push($weeks, $weeks[0]);
		for($i=0; $i<7; $i++){
			$html .= '<th>'.$weeks[$i+$conf['WEEK_BEGIN']].'</th>'."\n";
		}
		$html .= '</tr>'."\n".'</thead>'."\n";
		//ÏÔÊ¾ÈÕÆÚ
		if($conf['WEEK_BEGIN'] == 1) $begin--;
		$m = ceil(($days+$begin)/7)*7;
		$html .= '<tbody>'."\n".'<tr>'."\n";
		for($i=1; $i<$m+1; $i++){
			$d=$i-$begin;
			if($d>0 && $d<=$days){
				$html .= '<td>'.$d.'</td>'."\n";
			}else{
				$html .= '<td>&nbsp;</td>'."\n";
			}
			if($i%7==0 && $i!=0){
				$html .= '</tr>'."\n".'<tr>'."\n";
			}
		}
		$html .= '</tr>'."\n".'</tbody>'."\n";
		$html = '<table>'.$html.'</table>'."\n";
		echo $html;
	}
	/**
	 * 表格生成
	 *
	 * @param array $data 表格中的数据
	 * @param array $head 表格标题行，及内容配置
	 * 	array(
	 * 		'head' => 'Title', //当列表头的内容，允许HTML代码，老版本为key
	 * 		'body' => '<b>{$value}</b>', //当列表的内容，允许HTML代码，老版本为value
	 * 		'width' => 20, //当列的宽度
	 * 		'align' => 'right' //文字对齐方式，默认文字左对齐；共三种模式：left,right,center
	 * 		'class' => 'class', //当列使用的class；其中的class不会自动带上前缀
	 * 		'function' => sum, //当前列的运算；求和（sum），求平均（avg），求行数（count），求最大值（max），求最小值（min）
	 * 	)
	 * @param array $argument 需要直接带入的变量，key=>value形势
	 * @param array $config 表格的配置，具体配置参考上方$config['table']
	 * @return string 表格的HTML代码
	 * @access public
	 */
	public static function table($data, $head=array(), $argument=array(), $config=array()){
		//得到配置
		if(!is_array($argument)) $argument = array();
		$conf = self::format_config('table', $config);
		
		//得到模板
		$html_head = '';
		$html_body = '';
		$html_foot = '';
		$mod = '';
		$count = array();
		foreach($head as $k => $v){
			//老版本兼容
			if(!isset($v['head'])) $v['head'] = $v['key'];
			if(!isset($v['body'])) $v['body'] = $v['value'];
			//得到相关参数组成模板
			$atts = self::get_atts($v);
			$html_head .= '<th'.$atts.'>'.$v['head'].'</th>';
			unset($v['width']);
			$atts = self::get_atts($v);
			$mod .= '<td'.$atts.'>'.$v['body'].'</td>';
			//列求和
			if(isset($v['function'])){
				$key = preg_replace("/\{\\$([a-z0-9_]+)}/i", "\\1", $v['body']);
				$count[$key] = array();
				if($v['function'] == 'sum'){
					$html_foot .= '<td'.$atts.'>\'.array_sum($count['.$key.']).\'</td>';
				}else if($v['function'] == 'avg'){
					$html_foot .= '<td'.$atts.'>\'.(round(100*array_sum($count['.$key.'])/count($count['.$key.']))/100).\'</td>';
				}else{
					$html_foot .= '<td'.$atts.'>\'.'.$v['function'].'($count['.$key.']).\'</td>';
				}
			}else{
				$html_foot .= '<td'.$atts.'>&nbsp;</td>';
			}
		}
		$mod = str_ireplace(array("{php}","{/php}"), array("'.", ".'"), $mod);
		$mod = preg_replace("/\{\\$([\w-_]+)}/i", "'.\$v['\\1'].'", $mod);
		
		//取得每行的数据
		for($i=0, $m=count($data); $i<$m; $i++){
			$v = array_merge($argument, $data[$i]);
			$cls = $i%2==0 ? $conf['CLASS_PREF'].'even' : $conf['CLASS_PREF'].'odd';
			eval('$html_body .= \'<tr class="'.$cls.'">'.$mod.'</tr>\';');
			foreach($count as $ck => $cv){
				$count[$ck][] = $v[$ck];
			}
		}
		
		//取得头
		$html_head = '<thead><tr>'.$html_head.'</tr></thead>';
		
		//取得底
		if(count($count) <= 0){
			$html_foot = '';
		}else{
			eval('$html_foot = \'<tfoot><tr>'.$html_foot.'</tr></tfoot>\';');
		}

		$atts = self::get_atts($conf);
		$html = '<table'.$atts.' class="'.$conf['CLASS_PREF'].'box">'.$html_head.'<tbody>'.$html_body.'</tbody>'.$html_foot.'</table>';
		return $html;
	}
	/**
	 * 表单生成
	 *
	 * @param array $forms 表单结构
	 * 	array(
	 * 		'title' => (string)'Title', //表单标题
	 * 		'type' => (string)'text', //表单类型，默认为text
	 *			// text : 文本框
	 *			// password : 密码框
	 *			// file : 上传文件框
	 *			//(html5|plus) number : 数值框，可以制定最大最小和间隔
	 *			//(html5|plus) date : 日期框，可以下拉选择
	 *			//(html5|plus) time : 时间框
	 *			//(html5|plus) datetiem : 日期时间框
	 *			//(html5|plus) tel : 电话号码
	 *			//(plus) mobile : 手机号码，仅限中国
	 *			//(html5|plus) email : 邮件地址框
	 *			//(html5|plus) url : 地址框，需要带协议
	 *			//(html5|plus) range : 滚动条选择数值，可以制定最大最小和间隔
	 *			// radio : 单选框
	 *			// checkbox : 多选框
	 *			// textarea : 文本区域
	 *			// select : 下拉选择框
	 *			//(plus) period : 时间区域选择框，两个框，可以选择开始和结束时间
	 *			//(plus) string : 文本输出
	 *			//(plus) filebox : 直接上传框
	 *			// hidden : 隐藏框
	 *		'id' => (string)'id', //表单ID
	 *		'name' => (string)'name', //表单名称
	 * 		'value' => (string)'value', //表单的值
	 * 		'options' => (array)array(array('html'=>'html', 'value'=>'value'), ...), //Select的值
	 *		'multiple' => true, //Select可以多选
	 *		'empty' => (boolean)false, //可否为空，默认ture
	 * 		'check' => (string)'/^1[0-9]{10}$/', //表单验证
	 * 		'disabled' => (boolean)true, //是否不可用，默认false
	 * 		'class' => (string)'class', //当行表单使用的class；其中的class不会自动带上前缀
	 *		'style' => (string)'style', //当行表单使用的样式
	 *		'size' => (int)5, //HTML中的size，默认无
	 *		'rows' => (int)5, //HTML中的rows，textarea中可用
	 *		'cols' => (int)5, //HTML中的cols，textarea中可用
	 *		'min' => (int)0, //允许的最小值，number和range中可用
	 *		'max' => (int)9, //允许的最大值，number和range中可用
	 *		'step' => (int)3, //数值间隔，number和range中可用
	 *		'html' => (string)'html', //表单部分直接写HTML代码，使用次项除title配置外其他选项全部无效
	 *		'help' => (string)'help', //帮助文本
	 * 	)
	 * @param string $action 提交到的页面
	 * @param string $method 提交方式
	 * @param array $config 表单的配置，具体配置参考上方$config['form']
	 * @return string 表单的HTML代码
	 * @access public
	 */
	public static function form($forms, $action=null, $method="post", $config=array()){
		//得到配置
		if($action == null){
			$config['COMPLETE'] = false;
			$action = "#";
		}
		
		$conf = self::format_config('form', $config);
		
		$is_file = false;
		$item_html = '';
		$hide_html = '';
		
		//处理GET方式中的链接
		if($method == "get"){
			preg_match_all('/([^\=\&\?]+)=([^\=\&\?]+)/', $action, $re);
			for($i=0, $m=count($re[1]); $i<$m; $i++){
				$hide_html .= self::input($re[1][$i], $re[2][$i], 'hidden');
			}
		}
		
		//得到各行
		foreach($forms as $k => $v){
			$dd_html = '';
			if(isset($v['html'])){
				$dd_html = $v['html'];
			}else{
				//匹配表单方法
				switch($v['type']){
					case 'text':
						$dd_html = self::input($k, $v['value'], 'text', $v);
						break;
					case 'password':
						$dd_html = self::input($k, $v['value'], 'password', $v);
						break;
					case 'file':
						$dd_html = self::file($k, $v);
						$is_file = true;
						break;
					case 'number':
						$dd_html = self::input($k, $v['value'], 'number', $v);
						break;
					case 'date':
						$dd_html = self::input($k, $v['value'], 'date', $v);
						break;
					case 'period':
						$dd_html = self::period($k, $v['value'], $v);
						break;
					case 'email':
						$dd_html = self::input($k, $v['value'], 'email', $v);
						break;
					case 'tel':
						$dd_html = self::input($k, $v['value'], 'tel', $v);
						break;
					case 'mobile':
						$dd_html = self::input($k, $v['value'], 'mobile', $v);
						break;
					case 'url':
						$dd_html = self::input($k, $v['value'], 'url', $v);
						break;
					case 'radio':
						$dd_html = self::radio($v['options'], $k, $v['value'], $v);
						break;
					case 'checkbox':
						$dd_html = self::checkbox($v['options'], $k, $v['value'], $v);
						break;
					case 'textarea':
						$dd_html = self::textarea($k, $v['value'], $v);
						break;
					case 'select':
						$dd_html = self::select($v['options'], $k, $v['value'], $v);
						break;
					case 'filebox':
						$dd_html = self::filebox($k, $v['value'], $v);
						break;
					case 'string':
						$dd_html = self::string($v['value'], $v);
						break;
					case 'hidden':
						$hide_html .= self::input($k, $v['value'], 'hidden');
						break;
				}
			}
			if($dd_html != ''){
				$dt_html = $v['required'] === true ? '<b>*</b> ' : '';
				$dt_html .= $v['title'];
				$help_html = isset($v['help']) ? '<em class="'.$conf['CLASS_PREF'].'help">'.$v['help'].'</em>' : '';
				$item_html .= '<dl class="clearfix"><dt>'.$dt_html.'</dt><dd>'.$dd_html.$help_html.'</dd></dl>';
			}
		}
		//添加按钮
		$atts = self::get_atts($conf);
		if($conf['COMPLETE'] === true){
			$btn_html = '<button class="btn-base" type="submit">'.$conf['SUBMIT_TEXT'].'</button>';
			if($conf['RESET'] !== false) $btn_html .= '&nbsp;&nbsp;<button class="btn-base" type="reset">'.$conf['RESET_TEXT'].'</button>';
			$item_html .= '<dl class="clearfix '.$conf['CLASS_PREF'].'btn"><dt>&nbsp;</dt><dd>'.$btn_html.'</dd></dl>';
			$upfile = ($is_file || $conf['UPFILE']) && $method=="post" ? ' enctype="multipart/form-data"' : '';
			$html = '<form action="'.$action.'" method="'.$method.'" class="'.$conf['CLASS_PREF'].'box"'.$upfile.$atts.'>'.$hide_html.$item_html.'</form>';
		}else{
			$html = '<div class="'.$conf['CLASS_PREF'].'box"'.$atts.'>'.$hide_html.$item_html.'</div>';
		}
		
		return $html;
	}
	/**
	 * Text,Password,Number,Email,Url,Hidden生成
	 *
	 * @param string $name 输入项的名称
	 * @param string $value 输入项的默认值
	 * @param string $type 输入项的类型，默认为text
	 * @param array $config 输入项的配置，参考$config['input']
	 * @return string 生成的HTML代么
	 * @access public
	 */
	public static function input($name='', $value='', $type='text', $config=array()){
		switch($type){
			case 'number':
				$config['plus'] = 'number';
				$type = 'text';
				break;
			case 'tel':
				$config['placeholder'] = '010-88888888';
				$config['check'] = '/^[0-9| |\-|\(|\)]{5,25}$/';
				$type = 'text';
				break;
			case 'mobile':
				$config['placeholder'] = '13800138000';
				$config['check'] = '/^(13|14|15|18)\d{9}$/';
				$type = 'text';
				break;
			case 'email':
				$config['placeholder'] = 'you@domain.com';
				$config['check'] = '/^[0-9a-z_][_.0-9a-z-]{0,31}@([0-9a-z][0-9a-z-]{0,30}\.){1,4}[a-z]{2,4}$/';
				$type = 'text';
				break;
			case 'url':
				$config['placeholder'] = 'http://domain.com';
				$config['check'] = '/^(https?|ftp|mms):\/\/([A-z0-9]+[_\-]?[A-z0-9]+\.)*[A-z0-9]+\-?[A-z0-9]+\.[A-z]{2,}(\/.*)*\/?$/';
				$type = 'text';
				break;
			case 'date':
				$config['value'] = $config['value'] == date("Y-m-d", strtotime($config['value'])) ? $config['value'] : '';
				$config['plus'] = 'date';
				$config['class'] = 'input-text-short';
				$type = 'text';
		}
	
		if($type != "hidden"){
			$conf = self::format_config('input', $config);
			$atts = self::get_atts($conf);
			return '<input type="'.$type.'"'.$atts.' name="'.$name.'" value="'.$value.'">';
		}else{
			return '<input type="hidden" name="'.$name.'" value="'.$value.'">';
		}
	}
	/**
	 * File生成
	 *
	 * @param string $name 输入项的名称
	 * @param string $value 输入项的默认值
	 * @param array $config 输入项的配置
	 * @return string 生成的HTML代么
	 * @access public
	 */
	public static function file($name='', $config=array()){
		$conf = self::format_config('file', $config);
		$atts = self::get_atts($conf);
		return '<input type="file"'.$atts.' name="'.$name.'">';
	}
	/**
	 * Period生成
	 *
	 * @param string $name 输入项的名称
	 * @param string $value 输入项的默认值
	 * @param array $config 输入项的配置
	 * @return string 生成的HTML代么
	 * @access public
	 */
	public static function period($name='', $value='', $config=array()){
		$conf = $config;
		$conf['type'] = 'date';
		if(!isset($conf['value']['start'])){
			$config['value']['start'] = isset($conf['value']) ? $conf['value'] : '';
		}
		
		//开始时间
		$conf = self::format_config('input', $config);
		$conf['name'] = $name."['start']";
		$conf['value'] = $config['value']['start'];
		$html = self::input($conf['name'], $conf['value'], 'date', $conf);
		//连接符
		$html .= ' - ';
		//结束时间
		$conf = self::format_config('input', $config);
		$conf['name'] = $name."['end']";
		$conf['value'] = $config['value']['end'];
		$html .= self::input($conf['name'], $conf['value'], 'date', $conf);
		
		return $html;
	}
	/**
	 * String生成
	 *
	 * @param string $name 输入项的名称
	 * @param string $value 输入项的默认值
	 * @param array $config 输入项的配置
	 * @access public
	 */
	public static function string($value='', $config=array()){
		$conf = self::format_config('input_string', $config);
		$atts = self::get_atts($conf);
		return '<span'.$atts.'>'.$value.'</span>';
	}
	/**
	 * FileBox生成
	 *
	 * @param string $type 输入项的类型
	 * @param string $name 输入项的名称
	 * @param string $value 输入项的默认值
	 * @param array $config 输入项的配置
	 * @access public
	 */
	public static function filebox($name='', $value='', $config=array()){
		$config['plus'] = 'filebox';
		$conf = self::format_config('filebox', $config);
		$atts = self::get_atts($conf);
		return '<input type="file"'.$atts.' name="'.$name.'" data-value="'.$value.'">';
	}
	/**
	 * Textarea生成
	 *
	 * @param string $name 输入项的名称
	 * @param string $value 输入项的默认值
	 * @param array $config 输入项的配置
	 * @access public
	 */
	public static function textarea($name='', $value='', $config=array()){
		$conf = self::format_config('textarea', $config);
		$atts = self::get_atts($conf);
		$html = '<textarea'.$atts.' name="'.$name.'" rows="'.$conf['ROWS'].'" cols="'.$conf['COLS'].'">'.$value.'</textarea>';
		return $html;
	}
	/**
	 * Select生成
	 *
	 * @param array $data 所有可选项
	 *	array('key'=>'value', ...); //<option value="key">value</option>
	 *	array(
	 *		array('value'=>'value', 'html'=>'html'), //<option value="value">html</option>
	 *		...
	 *	);
	 * @param string $name 输入项的名称
	 * @param string|array $selected 选中项的value
	 * @access public
	 */
	public static function select($data, $name='', $selected='', $config=array()){
		$html = '';
		if(is_array($data)){
			foreach($data as $k => $v){
				$v = self::kv2vh($k, $v);
				if($v !== false){
					$sed = $selected!=$v['value'] ? '' : ' selected';
					$html .= '<option value="'.$v['value'].'"'.$sed.'>'.$v['html'].'</option>';
				}
			}
		}
		$conf = self::format_config('select', $config);
		$atts = self::get_atts($conf);
		$html = '<select name="'.$name.'"'.$atts.'>'.$html.'</select>';
		return $html;
	}
	/**
	 * Radio生成
	 *
	 * @param array $data 所有可选项
	 *	array('key'=>'value', ...); //<label><input type="radio" name="name" value="key"> value</label>
	 *	array(
	 *		array('value'=>'value', 'html'=>'html'), //<label><input type="radio" name="name" value="value"> html</label>
	 *		...
	 *	);
	 * @param string $name 输入项的名称
	 * @param string $checked 选中的项
	 * @access public
	 */
	public static function radio($data, $name='', $checked='', $config=array()){
		$html = '';
		if(is_array($data)){
			foreach($data as $k => $v){
				$v = self::kv2vh($k, $v);
				if($v !== false){
					$ced = $checked!=$v['value'] ? '' : ' checked';
					$html .= '<label class="input-radio"><input type="radio" name="'.$name.'" value="'.$v['value'].'"'.$ced.'>&nbsp;'.$v['html'].'</label>';
				}
			}
		}
		$conf = self::format_config('radio', $config);
		$atts = self::get_atts($conf);
		return '<div '.$atts.'>'.$html.'</div>';
	}
	/**
	 * Check生成
	 *
	 * @param array $data 所有可选项
	 *	array('key'=>'value', ...); //<label><input type="check" name="name" value="key"> value</label>
	 *	array(
	 *		array('value'=>'value', 'html'=>'html'), //<label><input type="check" name="name" value="value"> html</label>
	 *		...
	 *	);
	 * @param string $name 输入项的名称
	 * @param string|array $checked 选中的项
	 * @access public
	 */
	public static function checkbox($data, $name='', $checked='', $config=array()){
		$html = '';
		if($checked==''){
			$checked = array();
		}else if(is_array($checked)){
			$checked = $checked;
		}else{
			$checked = array($checked);
		}
		if(is_array($data)){
			foreach($data as $k => $v){
				$v = self::kv2vh($k, $v);
				if($v !== false){
					$ced = !in_array($v['value'], $checked) ? '' : ' checked';
					$html .= '<label class="input-checkbox"><input type="checkbox" name="'.$name.'" value="'.$v['value'].'"'.$ced.'>&nbsp;'.$v['html'].'</label>';
				}
			}
		}
		$conf = self::format_config('checkbox', $config);
		$atts = self::get_atts($conf);
		return '<div '.$atts.'>'.$html.'</div>';
	}
	/**
	 * Tabs生成
	 *
	 * @param array $tabs 标签项
	 * @param string $selected 选中的标签项
	 * @access public
	 */
	public static function tabs($tabs, $selected=0, $config=array()){
		$conf = self::format_config('tabs', $config);
		$selected = array_key_exists($selected, $tabs) ? $selected : 0;
		
		$hd_html = '';
		$bd_html = '';
		
		foreach($tabs as $k => $v){
			if(!isset($v['url'])) $v['url'] = '';
			if(!isset($v['content'])) $v['content'] = '';
			$cls = $k != $selected ? '' : 'selected';
			$hd_html .= '<li class="'.$cls.'"><a href="'.$v['url'].'" data-id="'.$k.'">'.$v['title'].'</a></li>';
			$bd_html .= '<div class="'.$conf['CLASS_PREF'].'item '.$cls.'">'.$v['content'].'</div>';
		}
		$hd_html = '<ul class="clearfix '.$conf['CLASS_PREF'].'hd">'.$hd_html.'</ul>';
		$bd_html = '<div class="clearfix '.$conf['CLASS_PREF'].'bd">'.$bd_html.'</div>';
		$atts = self::get_atts($conf);
		return '<div class="'.$conf['CLASS_PREF'].'box" '.$atts.'>'.$hd_html.$bd_html.'</div>';
	}
	private static $config_navs = array(
		'CLASS' => 'navs',
		'CLASS_PREF' => 'navs-',
		'ID' => ''
	);
	/**
	 * Nav生成
	 *
	 * @param array $tabs 菜单项
	 * @param int $selected 选中的菜单项
	 * @param array $config 配置
	 * @access public
	 */
	public static function menus($navs, $selected=0, $config=array()){
		$conf = self::format_config('menu', $config);
		$selected = array_key_exists($selected, $navs) ? $selected : 0;

		$navs_html = '';
		foreach($navs as $k => $v){
			if(!isset($v['url'])) $v['url'] = $_SERVER['REQUEST_URI'];
			$v['url'] .= strpos($v['url'], '?') === false ? '?_menu_selected='.$k : '&_menu_selected='.$k;
			if($k != $selected){
				$navs_html .= '<li><a href="'.$v['url'].'">'.$v['title'].'</a></li>';
			}else{
				$navs_html .= '<li class="'.$conf['CLASS_PREF'].'selected"><strong>'.$v['title'].'</strong></li>';
			}
		}
		$atts = self::get_atts($conf);
		return '<div class="clearfix '.$conf['CLASS_PREF'].'box" '.$atts.'><ul>'.$navs_html.'</ul></div>';
	}
}
?>