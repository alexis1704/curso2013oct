<?php 
$state = getenv('APPLICATION_ENV');
if(isset($state) &&
	getenv('APPLICATION_ENV') == 'production')
	define('APPLICATION_ENV', 'production');
else
	define('APPLICATION_ENV', 'development');

if(isset($_GET['controller']))
	$controller = $_GET["controller"];
else
	$controller = 'usuarios';




require_once "../model/generalModel.php";
require_once "../model/archivos.php";
require_once "../model/usuarios/usuarios.php";


$config_file = "../configs/config.ini";
$config = readConfigFile($config_file, APPLICATION_ENV);




switch($controller){
	case 'usuarios':
		include_once("../controllers/usuarios.php");
	break;
	default:
	break;
	
}
?>