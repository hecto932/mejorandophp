<?php
	
	//FRONTEND CONTROLLER SE ENCARGA DE 
	//CONFIGURAR NUESTRA APLICACION
	require "config.php";
	require "helpers.php";

	//LLAMAR AL CONTROLADOR INDICADO
	controller($_GET['url']);


	