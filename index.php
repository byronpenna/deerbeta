<?php 
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('APP_PATH', ROOT . 'application' . DS);
	// require_once APP_PATH . 'Request.php';
	$dir = opendir(APP_PATH);
	while ($file = readdir($dir)) {
		$ext = substr($file,strpos($file,".")+1,strlen($file));
		if(!is_dir($file) && $ext == "inc.php"){
			require_once APP_PATH . $file;
		}
	}
	// TENGO DUDA SI TAMBIEN INCLUIR CARPETA CORE
	try{
		Startup::run(new Request);	
	}catch(Exception $x){
		echo $x->getMessage();
	}
	

?>