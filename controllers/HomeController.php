<?php 
	
class HomeController{

	public function indexAction()
	{
		$vars = array(
			"titulo" => "Clase2"
		);

		return new View('home', $vars);
	}
}
