<?php 
class Work
{
	private $request;
	private $frm;
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