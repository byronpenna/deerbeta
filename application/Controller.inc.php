<?php 
abstract class Controller{
	protected $view;
	abstract public function index();
    // abstract public function __autoload($className);
    public function __construct() {
        $this->view = new View(new Request);
        require_once MODELS."Work.inc.php";
    }
    protected function loadModel($model){
    	$model = $model."Model";
    	$src = MODELS.$model.".inc.php";
    	require_once $src;
    	$model = new $model;
    	return $model;
    }
	
}
?>