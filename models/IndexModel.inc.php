<?php 
class IndexModel
{
	function logging($frm){
<<<<<<< HEAD
		$query = "INSERT INTO "
		$sql = new Sql();
		return true;
=======
		$query = "SELECT username,name,last_name,birthday,register_day 
				  FROM users
				  WHERE username = '".$frm->username."' and pass = MD5('".$frm->pass."')";
		$sql = new Sql();
		$sql->query = $query;
		$user = $sql->executeReader();
		if($user != ""){
			$work = new Work();
			$work->setVarSession($user[0]);
			return true;
		}else{
			return false;
		}
>>>>>>> as
	}
	function __construct(){

	}
}
?>