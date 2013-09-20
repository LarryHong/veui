<?php
/**
 * VIMEE PHP MVC framework
 * http://php.vimee.com/
 *
 * Copyright (c) 2012 Vimee
 * Licensed under the GPL licenses.
 *
 * @author HongLei<honglei@live.com>
 * @module VIMEE_INTERFACE
 * @version 1.0.0
 */
class VIMEE_INTERFACE{
	/**
	 * 可输出的类型
	 */
	private static $out_format = array('JSON', 'XML', 'SERIALIZE', 'ARRAY');
	/**
	 * 得到当前的接口格式
	 *
	 * @param string $data 需要输出的数据
	 * @access public
	 * @return string
	 */
	public static function getFormat($format=null){
		$format = $format==null ? strtoupper($_GET["format"]) : strtoupper($format);
		if(in_array($format, self::$out_format)){
			return $format;
		}else{
			return "JSON";
		}
	}
	/**
	 * 输出JSON
	 *
	 * @param array $data 需要输出的数据
	 * @access private
	 * @return string
	 */
	private static function formatJSON($data){
		return json_encode($data);
	}
	/**
	 * 数组转XML函数
	 *
	 * @param array $data 需要输出的数据
	 * @access private
	 * @return string
	 */
	private static function Array2XML($data){
		$out = null;
		foreach($data as $k=>$v){
			if(is_numeric($k)){
				$k = "item";
			}
			$out .= '<'.$k.'>';
			if(is_array($v)){
				$out .= self::Array2XML($v);
			}else{
				$out .= $v;
			}
			$out .= '</'.$k.'>';
		}
		return $out;
	}
	/**
	 * 输出XML
	 *
	 * @param array $data 需要输出的数据
	 * @access private
	 * @return string
	 */
	private static function formatXML($data){
		return "<?xml version='1.0' encoding='utf-8'?>".self::Array2XML(array('root'=>$data));
	}
	/**
	 * 输出SERIALIZE
	 *
	 * @param array $data 需要输出的数据
	 * @access private
	 * @return string
	 */
	private static function formatSERIALIZE($data){
		return serialize($data);
	}
	/**
	 * 输出Array
	 *
	 * @param array $data 需要输出的数据
	 * @access private
	 */
	private static function formatARRAY($data){
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
	/**
	 * 接口输出
	 *
	 * @param array $data 需要输出的数据
	 * @param int $status 状态，0为正常
	 * @param string $format 输出格式，JSON、XML、HTML
	 * @access public
	 * @return string
	 */
	public static function out($data=null, $status=0, $format=null){
		$out = array(
			'status' => $status
		);
		if($status == 0){
			$out['data'] = $data;
		}else{
			$out['error'] = $data;
		}
		switch(self::getFormat($format)){
			case 'XML':
				header('Content-Type: text/xml');
				$out = self::formatXML($out);
				break;
			case 'ARRAY':
				self::formatARRAY($out);
				return;
				break;
			case 'SERIALIZE':
				header("Content-type: text/plain");
				$out = self::formatSERIALIZE($out);
				break;
			default:
				header("Content-type: application/json");
				$out = self::formatJSON($out);
		}
		echo $out;
	}
}
?>