<?php
class VIMEE_CODEANALSIS{
	private $tag_html = "HTML Code";
	private $tag_import = "Import Code";
	private $content = null;
	private $code_html = null;
	private $code_import = null;
	
	public function VIMEE_CODEANALSIS($file){
		$this->content = file_get_contents($file);
	}
	public function get_html() {
		if(!is_null($this->code_html)){
			return $this->code_html;
		}
		preg_match("/<!-- ".$this->tag_html." Start \/\/-->(.*?)<!-- ".$this->tag_html." End \/\/-->/is", $this->content, $match);
		if(isset($match[1])){
			$this->code_html = $match[1];
		}else{
			$this->code_html = false;
		}
		return $this->code_html;
	}
	private function _imports(){
		$this->code_import = false;
		preg_match("/<!-- ".$this->tag_import." Start(.*?)".$this->tag_import." End \/\/-->/is", $this->content, $match);
		if(isset($match[1])){
			preg_match_all("/(.*?) : ([^{|}]+)({(.*?)})*/", $match[1], $match);
			$m = count($match[0]);
			if($m > 0){
				$this->code_import = array();
				for($i=0; $i<$m; $i++){
					$this->code_import[$i] = array(
						'title' => trim($match[1][$i]),
						'file' => trim($match[2][$i]),
						'snippet' => trim($match[4][$i])
					);
				}
			}
		}
	}
	private function get_file($conf){
		if(isset($conf['file']) && !empty($conf['file'])){
			$code = file_get_contents($conf['file']);
			if(isset($conf['snippet']) && !empty($conf['snippet'])){
				//解析代码片段集
				$code_snippet = array();
				preg_match_all("/\/\*(.*?)\*\/[^\/*]+/is", $code, $match);
				$m = count($match[0]);
				if($m > 0){
					for($i=0; $i<$m; $i++){
						if(substr($match[1][$i], 0, 1) == "*"){
							$t = explode("\n", $match[1][$i]);
							$code_snippet[trim($t[1], "* ")] = $match[0][$i];
						} 
					}
				}
				//取得需要的代码片段
				$snippet = explode(",", $conf['snippet']);
				$code = '';
				foreach($snippet as $v){
					$code .= $code_snippet[trim($v)];
				}
			}
			return $code;
		}
	}
	public function get_import(){
		$this->_imports();
		if(count($this->code_import) > 0){
			foreach($this->code_import as $k => $v){
				$this->code_import[$k]['code'] = $this->get_file($v);
			}	
		}
		return $this->code_import; 
	}
}
/*
$file = "http://honglei/veui/mobile/grid/x_x.php";
$ca = new VIMEE_CODEANALSIS($file);
//echo $ca->get_html();
$ca->get_import();
*/
?>