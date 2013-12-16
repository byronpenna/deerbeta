<?php 
class Startup
{
	public static function run(Request $request){
		// echo "gay";
		$controllerUrl = ROOT.'controllers'.DS. $request->controller.'Controller.php';
		$controller = $request->controller.'Controller';
		$method = $request->method;
		$args = $request->arguments;
		// echo $controller."<br>";
		// echo $method."<br>";
		// print_r($args)."<br>";
		if(is_readable($controllerUrl)){
			require_once $controllerUrl;
			$controller = new $controller;
			if(!is_callable(array($controller,$request->method))){
				$method = "index";
			}
			if(isset($args)){
				call_user_func_array(array($controller, $method), $args);
			}else{
				call_user_func(array($controller,$method));
			}
		}else{
			throw new Exception("Don't found", 1);
		}
	}
}
?>