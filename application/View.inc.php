<?php 
	class View
	{
		private $controller;
		function __construct(Request $request)
		{
			$this->controller = $request->controller;
		}
<<<<<<< HEAD
		function render($view){
=======
		
		function render($view,$obj=null){
>>>>>>> as
			// $viewSrc = VIEW.$this->controller.DS.$view.".html";
			$viewSrc = ROOT."site_media".DS.$view.".html";
			$varsKeysSrc = VIEW.$this->controller.DS."keys".DS.DEFAULT_LANG.".json";
			$varsKeysSrcParent = KEYS.DEFAULT_LANG.".json";

			$view = file_get_contents($viewSrc);
			$template = new Template();
<<<<<<< HEAD
	
			$varsKeysParentView = $template->getJson($varsKeysSrcParent);
			$varsKeysView = $template->getJson($varsKeysSrc);
			$varsKeysView = (Object)array_merge((Array)$varsKeysParentView,(Array)$varsKeysView);
			$varsKeysView->html_path = BASE_URL."site_media";
			$view = $template->setKeys($varsKeysView,$view);
=======
			// get	
			$varsKeysView = $this->getVarskeys($template,$varsKeysSrcParent,$varsKeysSrc);
			$layout = $this->getLayout();
			//set
			$view = $template->setDinamicsVars($obj,$view);
			$view = $template->setLayout($layout,$view);
			$view = $template->setKeys($varsKeysView,$view);
			echo $view;
		}
		function getLayout(){
>>>>>>> as
			$layout = new stdClass();
			$dir = opendir(LAYOUT);
			while ($file = readdir($dir)) {
				if($file != "." && $file != ".."){
					$key = substr($file,0,strpos($file,"."));
					$layout->$key = $file;
				}
			}
<<<<<<< HEAD
			$view = $template->setLayout($layout,$view);
			// print_r($layout);
			echo $view;
=======
			return $layout;
		}
		function getVarskeys($template,$varsKeysSrcParent,$varsKeysSrc){
			$varsKeysParentView = $template->getJson($varsKeysSrcParent);
			$varsKeysView = $template->getJson($varsKeysSrc);
			$varsKeysView = (Object)array_merge((Array)$varsKeysParentView,(Array)$varsKeysView);
			$varsKeysView->html_path = BASE_URL."site_media";
			$varsKeysView->site_path = BASE_URL;
			return $varsKeysView;
>>>>>>> as
		}
	}
?>