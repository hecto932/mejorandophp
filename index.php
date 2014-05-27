<?php
	
	//FRONTEND CONTROLLER SE ENCARGA DE 
	//CONFIGURAR NUESTRA APLICACION
	require "config.php";
	require "helpers.php";

	//LLAMAR A LOS CONTROLADORES INDIVIDUALES
	
	//index.php
	if(empty($_GET['url'])){
		require "controllers/home.php";
	}
	//index.php?url=contactos
	elseif($_GET['url'] == 'contactos'){
		require "controllers/contactos.php";
	}

	