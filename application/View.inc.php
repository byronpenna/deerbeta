<?php 
	class View
	{
		private $controller;
		function __construct(Request $request)
		{
			$this->controller = $request->controller;
		}
		function render($view){
			// $viewSrc = VIEW.$this->controller.DS.$view.".html";
			$viewSrc = ROOT."site_media".DS.$view.".html";
			$varsKeysSrc = VIEW.$this->controller.DS."keys".DS.DEFAULT_LANG.".json";
			$varsKeysSrcParent = KEYS.DEFAULT_LANG.".json";

			$view = file_get_contents($viewSrc);
			$template = new Template();
	
			$varsKeysParentView = $template->getJson($varsKeysSrcParent);
			$varsKeysView = $template->getJson($varsKeysSrc);
			$varsKeysView = (Object)array_merge((Array)$varsKeysParentView,(Array)$varsKeysView);
			$varsKeysView->html_path = BASE_URL."site_media";
			$view = $template->setKeys($varsKeysView,$view);
			$layout = new stdClass();
			$dir = opendir(LAYOUT);
			while ($file = readdir($dir)) {
				if($file != "." && $file != ".."){
					$key = substr($file,0,strpos($file,"."));
					$layout->$key = $file;
				}
			}
			$view = $template->setLayout($layout,$view);
			// print_r($layout);
			echo $view;
		}
	}
?>