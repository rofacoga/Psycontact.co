<?php
	header ( 'Access-Control-Allow-Origin: *' );
	// Permite mostrar los errores en consola...
	error_reporting ( E_ALL );
	ini_set('display_errors', TRUE);
	ini_set('error_reporting', E_ALL);

	try{
		// para llamar las clases que se necesitan para acceder
		require_once('clases/Sesion.php');


		$data = str_replace("\\","", $_REQUEST['data']);
		$jsonEntry = json_decode($data);

		echo call_user_func($jsonEntry->CLASS."::".$jsonEntry->METHOD,$jsonEntry->PARAMS);
	}catch(Exception $e){
		echo $e;
	}
?>