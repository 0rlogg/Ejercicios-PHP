
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
<p class="title">Programa una pequeña agenda</p>
<p class="enunciado">Con la tecnología conocida hasta ahora debes programar una especie de pequeña agenda según se especifica. (No usar sesiones, ni ficheros, ni bases de datos)
Es una aplicación para mantener una pequeña agenda en una única página web programada en PHP.
Los valores de la agenda sólo se mantendrán mientras estoy conectado de manera continua con en navegador, cuando reinicie el navegador la agenda empezará vacía.
La agenda almacenará únicamente dos datos de cada persona: su nombre y un número de teléfono. Además, no podrá haber nombres repetidos en la agenda.


En la parte superior de la página web se mostrará el contenido de la agenda. En la parte inferior debe figurar un sencillo formulario con dos cuadros de texto, uno para el nombre y otro para el número de teléfono.
Cada vez que se envíe el formulario:
Se producirá una advertencia :
Si el nombre está vacío
Si el teléfono no es numérico
Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.
Por otro lado cumplirá estos requisitos funcionales:
Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior.
Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre.
Se podrán borrar todos los contactos de la agenda.
El botón borrar contactos sólo estará habilitado si hay contactos en la agenda
A la hora de desarrollarla sigue el esquema que se plantea en el siguiente diagrama
</p>
<p class=respuestas>
Por lo que vemos en los requisitos del enunciado nos está pidiendo un array asociativo, donde el nombre es el índice y el teléfono es el valor. <br>
En php los arrays de por sí si se les introduce un valor en un índice que ya existe introducen el nuevo en lugar del viejo. Para borrar he encontrado el unset()<br>
<form action="practica_agenda.php" method="POST">
 Nombre <input type="text" name="name">  
Teléfono<input type="number" name="telephone"><br><br>
<input type="submit" name="submit" value="submit">
<input type="submit" value="reset" name="reset"><br><br>
<input type="submit" value="borrar" name="borrar"><br><br>

<?php

	if (!isset($contact_list)) {
		$contact_list = [];
	}
	

	if (isset($_POST['submit'])){
			//asigna a la variable $name el valor que recoge de  'name'.   
			$name = filter_input(INPUT_POST, 'name');

			$telephone = filter_input(INPUT_POST, 'telephone', FILTER_VALIDATE_INT);
		
			$contact_list = filter_input(INPUT_POST, "contact_list", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];
		if (empty($name) or is_numeric($name)) {
			nombre_invalido($name);
		} elseif (array_key_exists($name, $contact_list) && (empty($telephone))) {
			$contact_list = delete_contact($name, $contact_list);
		} else {
			$contact_list = create_modify_contact($contact_list, $name, $telephone);
		}   
	}
	
	if (isset($_POST['reset'])){
		unset($contact_list); 
		$contact_list = array(); 
	}
		
	
	
	function nombre_invalido($name) {
		echo("El campo del nombre está relleno de forma incorrecta. RECUERDA  <br>" );
		if (is_numeric($name)){
			echo("El campo del nombre no puede contener números<br>");
		} else {
			echo("El campo del nombre no puede estar en vacio. <br>");
		}	
	}
	
	function create_modify_contact($contact_list, $name, $telephone){
		
		if (array_key_exists($name, $contact_list)){
			$contact_list [$name] = $telephone;
			echo("Acabas de modificar el contacto $name");

		}elseif (empty($telephone)) {
			echo("El teléfono está vacio. Si quieres borrar un contacto asegúrate de que el nombre está bien escrito. De lo contrario introduce un número.");
		}else {
			$contact_list [$name] = $telephone;				
			echo("Has creado un contacto nuevo");
		}
		
		return $contact_list;
	}
	
	function delete_contact($name, $contact_list){
		unset($contact_list[$name]);
		echo("Acabas de borrar el contacto $name.");
		return $contact_list;
	}

      	foreach($contact_list as $name =>$telephone){
        	echo ("<input type='hidden' name='contact_list[$name]' value = '$telephone' />\n");
      	}
	


?>
</form>
<p>
<?php

	        	
	foreach ($contact_list as $name =>$telephone){
		echo("Nombre: $name, Telefono: $telephone. <br>");
        }
	
?>

<div>
</body>
