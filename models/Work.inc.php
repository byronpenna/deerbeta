<?php 
class Work
{
	private $request;
	private $frm;
<<<<<<< HEAD
=======
	function setVarSession($obj){
		session_start(true);
		foreach ($obj as $key => $value) {
			$_SESSION[$key] = $value;
		}
	}
>>>>>>> as
	function __construct($request = "")
	{
		if($request != ""){
			$this->request = $request;
			$this->frm = new stdClass();
			foreach ($request as $key => $value) {
				$this->frm->$key = $value;
			}	
		}
	}
	function __get($var){
		if(property_exists('Work', $var)){
			return $this->$var;
		}
	}
}
?>