<?php





echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$uploads_dir = $_SERVER['DOCUMENT_ROOT'] . "/proyecto2/public/uploads";
move_uploaded_file($_FILES['photo']['tmp_name'], $uploads_dir."/".$_FILES['photo']['name']);

$cadena = "";


foreach($_POST as $value){
	if(is_array($value))
		$value = implode("|",$value);
	$out[] = $value;
}

$out[] = $_FILES['photo']['name'];

$cadena = implode(",",$out) ."\n";

file_put_contents ("data.txt" , $cadena, FILE_APPEND | LOCK_EX);

header("Location: /proyecto2/public/usuarios.php");

/*$fp = fopen("data.txt","a");
fwrite($fp,$cadena);
fclose($fp);*/

/*id|nombre|email|.....|photo|options
							Update|Delete*/