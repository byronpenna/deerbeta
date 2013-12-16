<?php 
class indexController extends Controller
{
	function index(){
		$varsView = new stdClass();
		$varsView->title_page = "Bienvenidos";
		$this->view->render("index");
	}
	
}
?>