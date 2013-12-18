<?php 
// require_once 
class indexController extends Controller
{
	function index(){
		$varsView = new stdClass();
		$varsView->title_page = "Bienvenidos";
		$vars = new stdClass();
		$vars->messaje = "";
		$this->view->render("index",$vars);
	}
	function main(){
		$this->view->render("index",$vars);
	}
	function logueo(){
		$work = new Work($_POST); 
		$frm = $work->frm;
		$indexModel = $this->loadModel("Index");
		if($indexModel->logging($frm)){
			header("location: ".BASE_URL."main");
		}else{
			$vars = new stdClass();
			$vars->messaje = "Error al iniciar sesion";
			$this->view->render("index",$vars);
		}
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