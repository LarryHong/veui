<?php
/**
 * VIMEE PHP MVC framework
 * http://php.vimee.com/
 *
 * Copyright (c) 2009 Vimee
 * Licensed under the GPL licenses.
 *
 * @author HongLei<honglei@live.com>
 * @module VIMEE_MYSQL
 * @version 1.2.0
 */
class VIMEE_MYSQL{
	public $version = '1.2.0';
	//调试配置
	private $debug = false;
	private $debug_list = array();
	//基础配置
	private $db_count = 0;
	private $db_config = array();
	private $db_conn = array();
	//临时数据
	private $temp_id = -1;
	private $temp_affected = 0;
	private $temp_result = null;
	//统计数据
	private $run_time = 0;
	private $query_num = 0;
	/**
	 * 初始化此类
	 *
	 * @param array $db_config 数据库的配置
	 * 	array(
	 * 		array(
	 * 			'host' => 'host:port', //数据库服务器地址以及端口，默认端口3306
	 * 			'user' => 'user', //数据库用户名
	 * 			'password' => 'password', //数据库密码
	 * 			'database' => 'database', //数据库名称
	 * 			'persistent' => true|false, //是否持久链接
	 * 			'charset' => 'utf-8' //编码
	 * 		),
	 * 		......
	 * 	)
	 * @param boolean $debug 是否开始debug
	 * @access public
	 */
	public function VIMEE_MYSQL($db_config=null, $debug=false){
		$this->debug = ($debug==true);
		
		if(empty($db_config)){
			$this->debug_add('数据库配置文件格式错误，导入失败！');
		}else{
			if(!isset($db_config[0])){
				$db_config = array($db_config);
			}
		}
		$this->db_config = $db_config;
		$this->db_count = count($db_config);
		if($this->db_count > 0){
			$this->debug_add('导入'.$this->db_count.'个数据库配置！', 's');
		}else{
			$this->debug_add('没有数据库配置被导入！');
		}
	}
	/**
	 * DeBug信息添加
	 *
	 * @param setting $msg deBug的内容。
	 * @param setting $type deBug的的类型；e为错误，s为正常。
	 * @access private
	 * @return null
	 */
	private function debug_add($msg, $type='e'){
		if($this->debug){
			$this->debug_list[] = '<p style="'.($type=='e' ? 'color:red' : 'color:green').'">'.$msg.'</p>';
		}
	}
	/**
	 * DeBug信息输出
	 *
	 * @access public
	 * @return html
	 */
	public function debug_show(){
		if($this->debug){
			echo '<div id="VIMEE_DEBUG">'.implode("", $this->debug_list).'<p>共进行<b>'.$this->query_num.'</b>次查询，耗时'.$this->run_time.'ms</p></div>';
			$this->debug_list = array();
		}
	}
	/**
	 * 建立数据库链接
	 *
	 * @param void $id 要建立数据库的ID，不填写默认链接第一个配置。
	 * @access public
	 * @return resource
	 */
	public function connect($id=-1){
		//选择服务器
		if($id == -1 && $this->db_count == 1){
			$tid = 0;
		}else if($id == -1 && $this->temp_id != -1){
			$tid = $this->temp_id;
		}else if($id == -1 && $this->db_count > 1){
			$tid = rand(1, $this->db_count-1);
		}else if($id > -1 && $id < $this->db_count){
			$tid = $id;
		}else{
			$this->debug_add('服务器<b>'.$id.'</b>连接配置不存在！');
			return false;
		}
		//查看连接是否存在，存在便直接输出
		if(isset($this->db_conn[$tid])){
			return $this->db_conn[$tid];
		}
		//得到单个Mysql配置
		$host = $this->db_config[$tid]["host"];
		$user = $this->db_config[$tid]["user"];
		$password = $this->db_config[$tid]["password"];
		$database = $this->db_config[$tid]["database"];
		$persistent = isset($this->db_config[$tid]["persistent"]) ? $this->db_config[$tid]["persistent"] : false;
		$charset = isset($this->db_config[$tid]["charset"]) ? str_replace("-", "", $this->db_config[$tid]["charset"]) : false;
		//判断是否永久链接并使用相应的方法链接服务器
		if($persistent){
			$this->db_conn[$tid] = mysql_pconnect($host, $user, $password);
		}else{
			$this->db_conn[$tid] = mysql_connect($host, $user, $password);
		}
		if($this->db_conn[$tid]){
			$this->debug_add('服务器<b>'.$tid.' '.$this->db_config[$tid]["host"].'</b>连接建立成功！', 's');
		}else{
			$this->debug_add('服务器<b>'.$tid.' '.$this->db_config[$tid]["host"].'</b>连接建立失败！');
		}
		//选择相应的数据库
		$this->select_db($database, $tid);
		//确定相应的字符编码
		if($charset && $this->db_conn[$tid]){
			mysql_query("SET character_set_connection=".$charset.", character_set_results=".$charset.", character_set_client=binary", $this->db_conn[$tid]);
			$this->debug_add('字符编码确定为<b>'.$charset.'</b>！', 's');
		}
		//保存临时连接ID
		if($id == -1 && $tid != 0){
			$this->temp_id = $tid;
		}
		return $this->db_conn[$tid];
	}
	/**
	 * 选择数据库
	 *
	 * @param void $database 要选择的数据库。
	 * @access private
	 * @return boolean
	 */
	public function select_db($database, $tid=-1) {
		if($this->temp_id == -1 && $tid == -1){
			$tid = 0;
		}else if($tid == -1){
			$tid = $this->temp_id;
		}
		if(mysql_select_db($database, $this->db_conn[$tid])){
			$this->debug_add('数据库<b>'.$database.'</b>选择成功！', 's');
			return true;
		}else{
			$this->debug_add('数据库<b>'.$database.'</b>选择失败！');
			return false;
		}
	}
	/**
	 * 关闭单个服务器链接
	 *
	 * @param void $id 要关闭链接的ID。
	 * @access private
	 * @return boolean
	 */
	private function close_one($id=-1){
		if($id == -1){
			return false;
		}
		
		if(!is_resource($this->db_conn[$id])){
			$this->debug_add('服务器<b>'.$id.' '.$this->db_config[$id]["host"].'</b>连接不存在！');
		}else if(mysql_close($this->db_conn[$id])){
			$this->debug_add('服务器<b>'.$id.' '.$this->db_config[$id]["host"].'</b>连接断开成功！', 's');
		}else{
			$this->debug_add('服务器<b>'.$id.' '.$this->db_config[$id]["host"].'</b>连接断开失败！');
			return false;
		}
		return true;
	}
	/**
	 * 关闭服务器链接
	 *
	 * @param void $id 要关闭链接的ID，不填写为关闭所有服务器链接。
	 * @access public
	 * @return boolean
	 */
	public function close($id=-1){
		if($id == -1){
			//当不填写ID的情况下循环关闭所有的链接
			$re = true;
			foreach($this->db_conn as $k => $v){
				if(!$this->close_one($k)){
					$re = false;
				}
			}
		}else{
			//当填写ID的情况只判断和关闭指定链接
			$re = $this->close_one($id);
		}
		return $re;
	}
	/**
	 * 运行SQL语句
	 *
	 * @param string $sql 需要运行的SQL语句。
	 * @param boolean $bf 是否缓存结果。
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器（如果是主从服务器会自动把读放到从库，写放到主库）。
	 * @access public
	 * @return number
	 */
	public function query($sql, $bf=true, $id=-1){
		//trim SQL语句
		$sql = trim($sql);
		//如果是非查询语句，并且没有指定数据库则使用主数据库
		if($id == -1 && strtoupper(substr($sql, 0, 6)) != "SELECT"){
			$id = 0;
		}
		//得到开始时间
		$t_start = microtime(true);
		//连接相应的数据库
		$conn = $this->connect($id);
		//连接失败就退出
		if(!$conn) return false;
		//运行SQL语句
		if($bf){
			$this->temp_result = mysql_query($sql, $conn);
		}else{
			$this->temp_result = mysql_unbuffered_query($sql, $conn);
		}
		//得到结束时间
		$t_end = microtime(true);
		//统计运行时间
		$t_period = floor(($t_end-$t_start)*1000000)/1000;
		$this->run_time += $t_period;
		if($this->temp_result){
			$this->query_num++;
			$this->temp_affected = mysql_affected_rows();
			$this->debug_add('SQL语句<b>'.$sql.'</b>运行成功，共影响'.$this->temp_affected.'条记录，运行时间<b>'.$t_period.'ms</b>', 's');
		}else{
			$this->temp_affected = -1;
			$this->debug_add('SQL语句<b>'.$sql.'</b>运行失败！', 'e');
			$this->debug_add('&nbsp;&nbsp;&nbsp;&nbsp;错误<b>'.mysql_error($conn).'</b>');
		}
		return $this->temp_result;
	}
	/**
	 * 数组形式返回结果集
	 *
	 * @param resoruce $result SQL语句的运行结果。
	 * @param integer $type 输出结果集的类型（MYSQL_ASSOC, MYSQL_NUM, MYSQL_BOTH），默认为MYSQL_ASSOC。
	 * @access public
	 * @return array
	 */
	public function fetch_array($result=false, $type=MYSQL_ASSOC){
		//如果没有运行结果则使用最后运行的结果
		$result = $result === false ? $this->temp_result : $result;
		//判断运行结果是否存在
		if(!$result){
			$this->debug_add('SQL运行结果不存在！');
			return false;
		}
		//数组形式返回运行的结果集
		return mysql_fetch_array($result, $type);
	}
	/**
	 * 返回结果集
	 *
	 * @param resoruce $result SQL语句的运行结果。
	 * @access public
	 * @return array
	 */
	public function fetch_row($result=false){
		//如果没有运行结果则使用最后运行的结果
		$result = $result === false ? $this->temp_result : $result;
		//判断运行结果是否存在
		if(!$result){
			$this->debug_add('SQL运行结果不存在！');
			return false;
		}
		//数组形式返回运行的结果集
		return mysql_fetch_row($result);
	}
	/**
	 * 释放运行结果
	 *
	 * @param resoruce $result SQL语句的运行结果。
	 * @access public
	 * @return boolean
	 */
	public function free($result=false){
		//如果没有运行结果则使用最后运行的结果
		$result = $result === false ? $this->temp_result : $result;
		//释放运行结果
		if(mysql_free_result($result)){
			$this->debug_add('结果集释放成功！', 's');
			return true;
		}else{
			$this->debug_add('结果集释放失败！');
			return false;
		}
	}
	/**
	 * 得到运行影响的结果数量
	 *
	 * @access public
	 * @return number
	 */
	public function affected($id=-1){
		if($id == -1){
			//不带入服务器ID，直接指向最后一个链接
			return $this->temp_affected;
		}else{
			//带入服务器ID，首先判断链接是否存在，存在就输出
			if($this->db_conn[$id]){
				return mysql_affected_rows($this->db_conn[$id]);
			}else{
				$this->debug_add('服务器<b>'.$tid.' '.$this->db_config[$tid]["host"].'</b>连接不存在！');
				return -1;
			}
		}
	}
	/**
	 * 查询SQL并且得到结果数据（高级）
	 *
	 * @param string $sql 需要运行的SQL语句。
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return array
	 */
	public function select_sql($sql, $id=-1){
		//trim SQL语句
		$sql = trim($sql);
		//判断语句是否和本函数兼容
		if(strtoupper(substr($sql, 0, 6)) != "SELECT"){
			$this->debug_add('此函数只接受SELECT语句！');
			$this->temp_affected = -1;
			return array('total'=>-1);
		}
		//运行SQL
		$this->query($sql, true, $id);
		//运行失败
		if(!$this->temp_result){
			return array('total'=>-1);
		}
		//得到并整理好结果
		$res = array();
		while($row = $this->fetch_array()){
			array_push($res, $row);
		}
		//释放运行结果
		$this->free();
		return array('total'=>$this->temp_affected, 'data'=>$res);
	}
	/**
	 * 转意SQL语句中的字符串
	 * @param string $v 需要转意的字符串
	 * @access public
	 * @return string
	 * 
	 */
	public function escape_string($v){
		if(get_magic_quotes_gpc()){
			$v = stripslashes($v);
		}
		$this->connect();
		return "'".mysql_real_escape_string($v)."'";
	}
	/**
	 * 处理表名 (辅助)
	 *
	 * @param string $table 表名称
	 * @access private
	 * @return string
	 */
	private function option_table($table){
		$table = str_replace(array("`","."), array("","`.`"), $table);
		return "`".$table."`";
	}
	/**
	 * 处理存储内容 (辅助)
	 *
	 * @param array OR string $data 需要存储的数据
	 * 	"String" //完整的存储条件
	 * 	"Key" => "value" //相当于 `key` = 'value'
	 * @access private
	 * @return string
	 */
	private function option_data($data){
		if(is_string($data) || is_null($data)){
			return $data;
		}
		$out = array(
			'k' => array(),
			'v' => array(),
			's' => array()
		);
		foreach($data as $key => $val){
			if(is_numeric($key)){
				array_push($out['s'], $val);
			}else{
				//key的处理
				$key = "`".$key."`";
				//value是布尔值的处理
				if($val === false){
					$val = 0;
				}else if($val === true){
					$val = 1;
				}
				if(is_null($val)){
					$val = "NULL";
				}else if(!is_numeric($val)){
					$val = $this->escape_string($val);
				}
				//insert部分处理
				array_push($out['k'], $key);
				array_push($out['v'], $val);
				//update部分处理
				array_push($out['s'], $key." = ".$val);
			}
		}
		return $out;
	}
	/**
	 * 处理查询条件 (辅助)
	 *
	 * @param array OR string $where 查询条件
	 * 	"AND" => array() //使用AND连接数组中的条件，默认就是AND
	 * 	"OR" => array() //使用OR连接数组中的条件
	 * 	"String" //完整的查询条件
	 * 	"Key" => "value" //相当于 `key` = 'value'
	 * 	"Key" => array("value1", "value2", "value3") //相当于 `Key` IN ('value1', 'value2', 'value3')
	 * 	"Key" => null //相当于 `Key` IS NULL
	 * 	"Key" => array("c"=>"Connect", "v"=>"value") //相当于 `Key` Connect 'value', 如`Key` LIKE 'value'
	 * @param string $logic 条件连接逻辑AND，OR，默认是AND
	 * @access private
	 * @return string
	 */
	private function option_where($where, $logic="AND"){
		if(is_string($where) || is_null($where)){
			return $where;
		}
		$logic = strtoupper(trim($logic));
		$wheres = array();
		if(is_array($where)){
			foreach ($where as $k => $v) {
				//key的处理
				if(is_numeric($k)){
					array_push($wheres, '('.$this->option_where($v, $logic).')');
					continue;
				}else if(in_array(strtoupper($k), array('AND','OR'))){
					array_push($wheres, '('.$this->option_where($v, $k).')');
					continue;
				}
				//value是布尔值的处理
				if($v === false){
					$v = 0;
				}else if($v === true){
					$v = 1;
				}
				//value的处理
				$t_val = null;
				$t_connect = "=";
				if(is_numeric($v)){
					$t_val = $v;
				}else if(is_null($v)){
					$t_connect = "IS";
					$t_val =  "NULL";
				}else if(is_array($v)){
					if(isset($v[0])){
						$t_connect = "IN";
						$t_ary = array();
						foreach($v as $o){
							if(is_numeric($o)){
								array_push($t_ary, $o);
							}else if(is_string($o)){
								array_push($t_ary, $this->escape_string($o));
							}
						}
						$t_val = "(".implode(', ', $t_ary).")";
					}else if(!empty($v)){
						$t_connect = " ".strtoupper($v['c'])." ";
						if(is_numeric($v['v'])){
							$t_val = $v['v'];
						}else if(is_string($v['v'])){
							$t_val = $this->escape_string($v['v']);
						}
					}
				}else{
					$t_val = $this->escape_string($v);
				}
				if(!is_null($t_val)){
					array_push($wheres, " `".$k."` ".$t_connect." ".$t_val." ");
				}
			}
		}
		return implode(" ".$logic." ", $wheres);
	}
	/**
	 * 得到条件（高级）
	 * @param array $where 查询条件
	 * @access public
	 * @return public
	 */
	public function get_where($where){
		return $this->option_where($where);
	}
	/**
	 * 查询并且得到结果数据（高级）
	 *
	 * @param string $table 需要查询数据的表。
	 * @param array $option SQL条件
	 * 	array(
	 * 		'select' => array|string, //需要取得的字段
	 * 		'where' => array|string, //详细解释参考option_where函数说明
	 * 		'order' => string, //排序，不用包含ORDER BY
	 * 		'offset' => int, //起始数据位置，默认为0
	 * 		'size' => int //取出数据的个数，默认为所有
	 * 		'one' => true|false //只取第一条数据
	 * 	)
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return array
	 */
	public function select($table, $option=array(), $id=-1){
		//需要取得的字段
		if(isset($option['select']) && is_string($option['select'])){
			$select = $option['select'];
		}else if(isset($option['select']) && is_array($option['select'])){
			foreach($option['select'] as $k => $v){
				$option['select'][$k] = "`".$v."`";
			}
			$select = implode(', ', $option['select']);
		}else{
			$select = "*";
		}
		//查询条件
		$where = isset($option['where']) ? $option['where'] : null;
		$where = $this->option_where($where);
		$where = !empty($where) ? " WHERE ".$where : "";
		//排序
		$order = isset($option['order']) ? " ORDER BY ".$option['order'] : "";
		//起始条目和需要取出的条数
		$offset = isset($option['offset']) ? abs(intval($option['offset'])) : 0;
		if(isset($option['one']) && $option['one'] === true){
			$size = 1;
		}else{
			$size = isset($option['size']) ? abs(intval($option['size'])) : 0;
		}
		$limit = $size>0 ? " LIMIT ".$offset.", ".$size : "";
		//得到表名
		$table = $this->option_table($table);
		//组合SQL
		$sql = "SELECT ".$select." FROM ".$table.$where.$order.$limit;
		return $this->select_sql($sql, $id);
	}
	/**
	 * 查询并且得到一条结果数据（高级）
	 *
	 * @param string $table 需要查询数据的表。
	 * @param array $option SQL条件。参考函数select()中$option的解释
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return array OR boolean
	 */
	public function one($table, $option=array(), $id=-1){
		$option['one'] = true;
		$re = $this->select($table, $option, $id);
		if($re['total'] == 1){
			return $re['data'][0];
		}else{
			return false;
		}
	}
	/**
	 * 插入单条数据（高级）
	 *
	 * @param string $table 需要插入数据的表。
	 * @param array $data 要插入的数据数组，格式：array('Key'=>'value',......)
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return number
	 */
	public function insert($table, $data, $id=-1){
		$table = $this->option_table($table);
		$data = $this->option_data($data);
		$sql = "INSERT INTO ".$table." (".implode(", ", $data['k']).")VALUE (".implode(", ", $data['v']).")";
		$this->query($sql, true, $id);
		return $this->temp_affected;
	}
	/**
	 * 取得最后插入操作的数据ID（高级）
	 *
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return number
	 */
	public function get_insert_id($id=-1){
		if($id == -1){
			//不带入服务器ID，直接指向最后一个链接
			$insert_id = mysql_insert_id();
		}else{
			//带入服务器ID，首先判断链接是否存在，存在就输出
			if($this->db_conn[$id]){
				$insert_id = mysql_insert_id($this->db_conn[$id]);
			}else{
				$this->debug_add('服务器<b>'.$tid.' '.$this->db_config[$tid]["host"].'</b>连接不存在！', 'e');
				$insert_id = -1;
			}
		}
		return $insert_id;
	}
	/**
	 * 修改数据（高级）
	 *
	 * @param string $table 需要修改数据所在的表。
	 * @param array $data 需要修改的数据数组，格式：array('Key'=>'value',......)
	 * @param string $where 修改数据的查询条件。参考函数option_where()中$where的解释
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return number
	 */
	public function update($table, $data, $where=null, $id=-1){
		$table = $this->option_table($table);
		$data = $this->option_data($data);
		$where = $this->option_where($where);
		$where = !empty($where) ? " WHERE ".$where : "";
		$sql = "UPDATE ".$table." SET ".implode(", ", $data['s']).$where;
		$this->query($sql, true, $id);
		return $this->temp_affected;
	}
	/**
	 * 删除数据（高级）
	 *
	 * @param string $table 需要删除数据所在的表。
	 * @param string $where 删除数据的查询条件。参考函数option_where()中$where的解释
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return number
	 */
	public function delete($table, $where=null, $id=-1){
		$table = $this->option_table($table);
		$where = $this->option_where($where);
		$where = !empty($where) ? " WHERE ".$where : "";
		$sql = "DELETE FROM ".$table.$where;
		$this->query($sql, true, $id);
		return $this->temp_affected;
	}
	/**
	 * 查询并且得到结果数据数量（高级）
	 *
	 * @param string $table 需要查询数据的表。
	 * @param array $option SQL条件。参考函数select()中$option的解释
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return number
	 */
	public function total($table, $option=array(), $id=-1){
		$option['select'] = "COUNT(*) AS `total`";
		unset($option['order']);
		$re = $this->select($table, $option, $id);
		if($re['total'] == 1){
			return intval($re['data'][0]['total']);
		}else{
			return -1;
		}
	}
	/**
	 * 查询是否存在结果（高级）
	 *
	 * @param string $table 需要查询数据的表。
	 * @param array $where 查询条件。参考函数option_where()中$where的解释
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return number
	 */
	public function exist($table, $where, $id=-1){
		$option = array('where'=>$where, 'one'=>true);
		$re = $this->select($table, $option, $id);
		if($re['total'] == 1){
			return true;
		}else{
			return false;
		}
	}
	/**
	 * 修改数据或者插入数据（高级）
	 *
	 * @param string $table 需要查询数据的表。
	 * @param array $updata 需要修改的数据数组，格式：array('Key'=>'value',......)
	 * @param array $insdata 需要插入的数据数组，格式：array('Key'=>'value',......)
	 * @param array $where 查询条件。参考函数option_where()中$where的解释
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return number
	 */
	public function upins($table, $updata, $insdata, $where, $id=-1){
		if($this->exist($table, $where, $id)){
			return $this->update($table, $updata, $where, $id);
		}else{
			return $this->insert($table, $insdata, $id);
		}
	}
	/**
	 * 查询并且得到分页的结果数据（高级）
	 *
	 * @param string $table 需要查询数据的表。
	 * @param array $option SQL条件。参考函数select()中$option的解释
	 * @param number $page 当前所在的页。
	 * @param number $pagesize 每一页要输出的数据数总数。
	 * @param void $id 要运行SQL语句所在服务器的ID，不填写为自动选择服务器。
	 * @access public
	 * @return array
	 */
	public function page($table, $option=array(), $page=1, $pagesize=10, $id=-1){
		$option['size'] = 0;
		$total = $this->total($table, $option, $id);
		if($total >= 0){
			$pagetotal = ceil($total/$pagesize);
			$page = floor($page);
			$page = ($page < $pagetotal) ? $page : $pagetotal;
			$page = ($page > 0) ? $page : 1;
			$option['offset'] = ($page-1)*$pagesize;
			$option['size'] = $pagesize;
			$re = $this->select($table, $option, $id);
			return array('total'=>$total, 'page'=>$page, 'pagetotal'=>$pagetotal, 'data'=>$re['data']);
		}else{
			return array('total'=>-1);
		}
	}
}
?>
