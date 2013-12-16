<?php 
class Request
{
	private $controller;
	private $method;
	private $arguments;
	function __set($var,$valor){
		if(property_exists('Request', $var)){
			$this->$var = $valor;	
		}
	}
	function __get($var){
		if(property_exists('Request', $var)){
			return $this->$var;
		}
	}
	function __construct(){
		if(isset($_GET['url'])){
			$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $this->controller = strtolower(array_shift($url));
	        $this->method = strtolower(array_shift($url));
	        $this->arguments = $url;
		}
		if(!$this->controller){
			$this->controller = "index";
		}
		if(!$this->_method){
            $this->_metodo = 'index';
        }
        if(!isset($this->_argumentos)){
            $this->_argumentos = array();
        }
	}
}
?>