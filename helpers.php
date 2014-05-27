<?php 

	//DECLARANDO UNA FUNCION
	function view($template, $vars = array())
	{
		extract($vars);
		require "views/$template.tpl.php";
	}
