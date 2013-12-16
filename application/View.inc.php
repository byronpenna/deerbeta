<?php 
	class View
	{
		private $controller;
		function __construct(Request $request)
		{
			$this->controller = $request->controller;
		}
		function render($view){
			$viewSrc = VIEW.$this->controller.DS.$view.".html";
			echo file_get_contents($viewSrc);
			// echo $viewSrc; 
		}
	}
?>