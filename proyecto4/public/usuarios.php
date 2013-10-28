<?php
/*echo "Usuarios.php" . "<br / >";
echo __FILE__;*/
if(isset($_GET['action']))
	$action = $_GET["action"];
else
	$action = 'select';

$config_file = "../configs/config.ini";

require_once "../model/generalModel.php";

$config = readConfigFile($config_file, "development");

/*echo "<pre>";
echo print_r($config);
echo "</pre>";

die;*/

require_once "../model/archivos.php";
require_once "../model/usuarios/usuarios.php";

switch($action){
	
	case 'select':		
	$users = readAllUsersFromFile();
	include("../views/usuarios/select.phtml");
	break;
	case 'update':
		if($_POST){
			$file_name = subirFoto($_FILES);
			updateUserFile($_POST,$file_name,$_GET['line']);
			header("Location: usuarios.php");
		}else{
			$user = readUserLine($_GET['line']);
			include("../views/usuarios/insert.phtml");
		}
	break;
	case 'insert':
		if($_POST){
			$file_name = subirFoto($_FILES);
			userToFile($_POST,$file_name);			
			header("Location: usuarios.php");
		}else{			
			include("../views/usuarios/insert.phtml");
		}
		
	break;	
	case 'delete':	
		if($_POST){
			if($_POST['borrar'] == 'Si'){
				deleteUserFile($_POST['line']);
				header("Location: usuarios.php");
			}
		}else{
			$user = readUserLine($_GET['line']);
			include("../views/usuarios/delete.phtml");
		}
	break;
	default:
		header("Location: usuarios.php");	
}