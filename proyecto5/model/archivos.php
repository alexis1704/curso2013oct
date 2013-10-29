<?php

/**
 * Upload a file to uploads directory
 * @param array $array_files
 * @return string filename
 */


function subirFoto($array_files){
	
	$uploads_dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads";
	
	//Leer los nombres de los archivos de la carpeta en  un array
	$archivos = scandir($uploads_dir);
	//Recorrer el array
	$a = 0;
	$file = $array_files['photo']['name'];
	//comparar el nombre con el nombre del ficher del array
	while(in_array($file,$archivos)){
		//si existe aumentar el contador
		$a++;
		$file_info = pathinfo($uploads_dir."/".$array_files['photo']['name']);
		$file = $file_info['filename'] . "-" . $a . "." . $file_info['extension'];	
	}
		

	move_uploaded_file($array_files['photo']['tmp_name'], $uploads_dir."/".$file);
	
	return $file;
}