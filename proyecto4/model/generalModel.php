<?php 

/**
 * Read .ini config file
 * 
 * @param string $filename
 * @param string $state
 * @return array config
 */
function readConfigFile($filename, $state){
	
	
	//* Leer el contenido del fichero .ini en un array y lo siguiente que escribo es el test (TDD)
	//* para verificar que config es array ej. escribir una función que contenga is_array
	$config = parse_ini_file($filename, true);
	
	//* Recorrer el array
	foreach ($config as $key => $value){
		// * dividir las llaves por : en un array
		$array_keys = explode(':',$key);
		//* si la llave 1 es igual a state coger los elementos del array en llave 1
		if($array_keys[0] == $state){
			//* coger los elementos del array en llave 0 o 2
			$config_arra1 = $config[$array_keys[1]];
			$config_arra2 = $config[$key];
			break;
		}
		
	}
	
	//* hacer el marge de los array 1 y array 2	
	$config = array_merge($config_arra1,$config_arra2);
	
	return $config;
	
	
	
}

?>