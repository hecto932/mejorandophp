<?php 
	
class HomeController{

	public function indexAction()
	{
		$vars = array(
			"titulo" => "MejorandoPHP"
		);

		return new View('home', $vars);
	}
}
