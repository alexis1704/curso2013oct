<?php


/*$cadena = "";
foreach($_POST as $value){
	if(is_array($value)){
		foreach($value as $value2){
			$cadena .= $value2 . ",";
		}
	}else{
		$cadena .= $value . ",";
	}
}


$fp = fopen("data.txt","a");
fwrite($fp,$cadena);
fclose($fp);*/


echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$uploads_dir = $_SERVER['DOCUMENT_ROOT'] . "/proyecto2/public/uploads";

move_uploaded_file($_FILES['photo']['tmp_name'], $uploads_dir."/".$_FILES['photo']['name']);