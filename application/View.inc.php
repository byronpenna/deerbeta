<?php 
	class View
	{
		private $controller;
		function __construct(Request $request)
		{
			$this->controller = $request->controller;
			echo $this->controller;
		}
	}
?>