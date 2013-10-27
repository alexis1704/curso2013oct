<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Formulario</title>
</head>
<body>

<form action="action.php" method="POST" enctype="multipart/form-data">
	<fieldset>
	    <legend>Formulario:</legend>
	    <input type="hidden" name="id" value="1">
	    <ul>
	    	<li>Nombre: <input type="text" name="name"></li>
	    	<li>Email: <input type="text" name="email"></li>
	    	<li>Password: <input type="password" name="pass"></li>
	   		<li>Dirección: <input type="text" name="address"></li>
	    	<li>Teléfono: <input type="text" name="phone"></li>
	    	<li>Descripción: <textarea rows="" cols="" name="description"></textarea></li>
	    	
	    	<li>
	    		Tecnología:<br/>
	    		<input type="checkbox" name="techs[]" value="php"> PHP<br/>
				<input type="checkbox" name="techs[]" value="mysql"> MySQL<br/>
				<input type="checkbox" name="techs[]" value="Java"> Java<br/>
			</li>
			<li>
	    		Mascotas:<br/>
	    		<input type="radio" name="pets" value="perro"> Perro<br/>
				<input type="radio" name="pets" value="gato"> Gato<br/>
				<input type="radio" name="pets" value="otros"> Otros<br/>
			</li>
			
			<li>
	    		Idiomas:<br/>
	    		<select multiple name="languages[]">
	    			<option value="eng">Ingles</option>
	    			<option value="fra">Francés</option>
	    			<option value="ger">Aleman</option>
	    			<option value="esp">Castellano</option>
	    		</select>
			</li>
			
			<li>
	    		Ciudad:<br/>
	    		<select name="city">
	    			<option value="zgz">Zaragoza</option>
	    			<option value="bcn">Barcelona</option>
	    			<option value="mad">Madrid</option>
	    		</select>
			</li>
			
			<li>Foto: <input type="file" name="photo"></li>
			
			<li>
				Submit <input type="submit" name="Enviar">
			</li>
			<li>
				Reset <input type="reset" value="Reset">
			</li>
			
			<li>
				Cancel <input type="button" value="Cancel">
			</li>
	    		
	    </ul>
	    
  	</fieldset>
</form>

</body>
</html>