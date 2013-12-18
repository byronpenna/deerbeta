<?php 
class Sql
{
	private $connection;
	private $query;
	function executeQuery(){
		$result = $this->execute();
		if($result){
			return true;
		}else{
			return false;
		}
	}
	function execute(){
		return mysqli_query($this->connection,$this->query);
	}
	function __construct()
	{
		$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	}
	function __set($var,$valor){
		if(property_exists('Sql', $var)){
			$this->$var = $valor;	
		}
	}
	function __get($var){
		if(property_exists('Sql', $var)){
			return $this->$var;
		}
	}
}
?>