<?php 
// require_once 
class indexController extends Controller
{
	function index(){
		$varsView = new stdClass();
		$varsView->title_page = "Bienvenidos";
		$this->view->render("index");
	}
	function logueo(){
		$work = new Work($_POST); 
		$frm = $work->frm;
		$indexModel = $this->loadModel("Index");
		if($indexModel->logging($frm)){
			echo "logueado correctamente";
		}else{
			echo "gay";
		}
	}
	
}
?>