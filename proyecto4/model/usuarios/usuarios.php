<?php

/**
 * Write user to txt file
 * @param array $array_data
 * @param string $file_name
 * @return null
 */

function userToFile($array_data,$file_name){
	$cadena = "";
	
	foreach($_POST as $value){
		if(is_array($value))
			$value = implode("|",$value);
		$out[] = $value;
	}
		
	$out[] = $file_name;
		
	$cadena = implode(",",$out) ."\n";
		
	file_put_contents ("data.txt" , $cadena, FILE_APPEND | LOCK_EX);
	
}

/**
 * Read user line from txt file and return as array
 * @param int $line
 * @return array user
 */

function readUserLine($line){
	$data = file_get_contents("data.txt");
	$data = explode("\n", $data);
	$user = $data[$line];
	$user = explode(",", $user);
	foreach($user as $value){
		if(strpos($value, '|')!==false)
			$value=explode("|",$value);
		$userarray[]=$value;
	}
	return $userarray;
}

/**
 * Read all user form text file into to array
 * @return array users
 */

function readAllUsersFromFile(){

	$data = file_get_contents('data.txt');
	$data = explode("\n", $data); //lineas
	
	$data_arr = array_pop($data);

	foreach ($data as $key => $value){
		$user = explode(",", $value);	
		$users[] = $user;
	}
	
	return $users;
}

/**
 * Update user to txt file line id
 * 
 * @param array $array_data
 * @param string $file_name
 * @param int $line
 */

function updateUserFile($array_data,$file_name,$line){
	$data = file_get_contents('data.txt');
	$data = explode("\n", $data); //lineas
	
	$user = $data[$line];
	$user = explode(",", $user);
	
	if($file_name != end($user))
		 unlink($_SERVER['DOCUMENT_ROOT'] . "/uploads/".end($user));
		
	$cadena = "";
		
	foreach($array_data as $value){
		if(is_array($value))
			$value = implode("|",$value);
		$out[] = $value;
	}

	$out[] = $file_name;
		
	$cadena = implode(",",$out);
		
	$data[$line] = $cadena;
		
		
	$data = implode("\n", $data);
		
	file_put_contents ("data.txt" ,$data);	
}

/**
 * Delete user from txt file by line id
 * 
 * 
 * @param int $line
 */

function deleteUserFile($line){
	
	$data = file_get_contents('data.txt');
	$data = explode("\n", $data); //lineas
	
	$user = $data[$line];
	$user = explode(",", $user);
	
	unlink($_SERVER['DOCUMENT_ROOT'] . "/uploads/".end($user));
	
	unset($data[$line]);
	$data = implode("\n", $data);
	file_put_contents ("data.txt" ,$data);
	
}