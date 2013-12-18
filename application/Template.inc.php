<?php 
class Template
{
<<<<<<< HEAD
=======
	function setDinamicsVars($obj,$view){
		if($obj != null){
			foreach ($obj as $key => $value) {
				$view = str_replace("{#".$key."}",$value,$view);
			}	
		}
		return $view;
	}
>>>>>>> as
	function setKeys($obj,$view){
		// echo "hey";
		foreach ($obj as $key => $value) {
			$view = str_replace("{@".$key."}", $value,$view);
		}
		return $view;
	}
	function setLayout($obj,$view){
		foreach ($obj as $key => $value) {
			$layout = file_get_contents(LAYOUT.$value);
			$view = str_replace("{@@".$key."}",$layout, $view);
		}
		return $view;
	}
	function getJson($url){
		$json = file_get_contents($url);
		$json = json_decode($json);
		return $json;
	}
	
}
?>