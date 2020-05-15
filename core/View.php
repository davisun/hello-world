<?php 
/**
 * 
 */
class View {
	protected $_head, $_body, $_siteTitle = SITE_TITLE, $_outputBuffer, $_layout = DEFAULT_LAYOUT;
	
	// public function __construct()	{
	// 	# code...
	// }

	public function render($viewName){
		$viewAry = explode('/', $viewName);
		$viewString = implode(DS, $viewAry);
		if (file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')) {
			include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
			include(ROOT . DS . 'app' . DS . 'views' . DS . 'layout' . DS . $this->_layout . '.php');
		}else{
			die('The view \"' . $viewName . '\" does not exist.');
		}
	}

	public function content($type){
		if ($type == 'head') {
			return $this->_head;
		}elseif ($type == 'body') {
			return $this->_body;
		}
		return false;
	}

	public function start($type){
		$this->_outputBuffer = $type;
		ob_start();
	}

	public function end(){
		if($this->_outputBuffer == 'head'){
			$this->_head = ob_get_clean();
		}elseif ($this->_outputBuffer == 'body') {
			$this->_body = ob_get_clean();
		}else{
			die('you must first run the start method.');
		}
	}

	public function siteTitle(){
		// if ($this->_siteTitle == '') return SITE_TITLE;
		return $this->_siteTitle;
	}

	public function setSiteTitle($title){
		$this->_siteTitle = $title;
	}

	public function setLayout($path){
		$this->_layout = $path;
	}

	public function insert($path) {
		include ROOT . DS . 'app' . DS . 'views' . DS . $path . '.php';
	}

	public function partial($group, $partial) {
		include ROOT . DS . 'app' . DS . 'views' . DS . $group . DS . 'partials' . DS . $partial . '.php';
	}
// end of class	
}