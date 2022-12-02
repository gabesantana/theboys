<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "usbw";
	$dbname = "form_theboys";
	
	// criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	// Teste de Conexão 	
	if (!$conn) {
    		printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
	}
