<?php
	
	//FRONTEND CONTROLLER SE ENCARGA DE 
	//CONFIGURAR NUESTRA APLICACION
	require "config.php";
	require "helpers.php";

	//Library 
	require 'library/Request.php';
	require 'library/Inflector.php';

	//LLAMAR AL CONTROLADOR INDICADO
	if(empty($_GET['url']))
	{
		$url = "";
	}
	else
	{
		$url = $_GET['url'];
	}

	$request = new Request($url);
	$request->execute();