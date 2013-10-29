<?php
/*echo "Usuarios.php" . "<br / >";
echo __FILE__;*/
if(isset($_GET['action']))
	$action = $_GET["action"];
else
	$action = 'select';

/*echo "<pre>";
echo print_r($config);
echo "</pre>";

die;*/



switch($action){
	
	case 'select':		
	$users = readAllUsersFromFile();
	include("../views/usuarios/select.phtml");
	break;
	case 'update':
		if($_POST){
			$file_name = subirFoto($_FILES);
			updateUserFile($_POST,$file_name,$_GET['line']);
			header("Location: /?controller=usuarios&action=select");
		}else{
			$user = readUserLine($_GET['line']);
			include("../views/usuarios/insert.phtml");
		}
	break;
	case 'insert':
		if($_POST){
			$file_name = subirFoto($_FILES);
			userToFile($_POST,$file_name);			
			header("Location: /?controller=usuarios&action=select");
		}else{			
			include("../views/usuarios/insert.phtml");
		}
		
	break;	
	case 'delete':	
		if($_POST){
			if($_POST['borrar'] == 'Si')
				deleteUserFile($_POST['line']);
			header("Location: /?controller=usuarios&action=select");			
		}else{
			$user = readUserLine($_GET['line']);
			include("../views/usuarios/delete.phtml");
		}
	break;
	default:
		header("Location: /?controller=usuarios&action=select");	
}