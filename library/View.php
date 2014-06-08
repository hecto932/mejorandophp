<?php 

class View extends Response{

	protected $template;
	protected $vars = array();

	//DECLARANDO UNA FUNCION
	public function __construct($template, $vars = array())
	{
		$this->template = $template;
		$this->vars = $vars;
	}

	public function add($var, $value)
	{
		$this->vars[$var] = $value;
	}

	public function getTemplate()
	{
		return $this->template;
	}

	public function getVars()
	{
		return $this->vars;
	}

	public function execute()
	{
		$template = $this->getTemplate();
		$vars = $this->getVars();

		call_user_func(function () use ($template, $vars){
			
			extract($vars);

			ob_start(); // NOS PERMITE PARA TODA LA SALIDA DE TEXTO QUE SE ENVIA AL CLIENTE Y ALMACENARLA COMO UNA VARIABLE

			require "views/".$template.".tpl.php";

			$tpl_content = ob_get_clean(); //A TRAVES DE ESTA FUNCION

			require "views/layout.tpl.php";
		});

	}
}