<?php 
	$data = file_get_contents('data.txt');
	$data = explode("\n", $data); //lineas
	//$data = array_pop($data);
?>
<a href="formulario.php">Insertar Usuario</a>
<table border="1">
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>DIRECCIÓN</th>
		<th>TELÉFONO</th>
		<th>DESCRIPCIÓN</th>
		<th>TECNOLOGÍAS</th>
		<th>MASCOTAS</th>
		<th>LENGUAJES</th>
		<th>CIUDAD</th>
		<th>SUBMIT</th>
		<th>FOTO</th>
		<th>OPCIONES</th>
	</tr>
	<?php 
		foreach ($data as $key => $value){
		$user = explode(",", $value);
			if(count($user) > 1){
				echo "<tr>";
					
					foreach ($user as $key => $value){
						if($key == 12){
							echo "<td>";
							echo "<img src='proyecto2/public/uploads/". $value."' width='100px'/>";
							echo "</td>";
						}else{
							echo "<td>";
							echo $value . count($user);
							echo "</td>";
						}
						
					}
					echo "<td>";
					echo "<a href='formulario.php'>Update</a>";
					echo "&nbsp;&nbsp";
					echo "<a href='delete.php'>Delete</a>";
					echo "</td>";
				echo "</tr>";
			}
		}
	?>
</table>

<?php 
/*
 * Leer en string los datos del repositorio (*.txt)
 * Crear un array con los datos las filas por "\n" y los elementos por "," y los otros por "|"
 * Dibujar filas y columnas
 * Añadir update y delete
 */
?>


