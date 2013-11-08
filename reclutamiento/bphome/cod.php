<?php
function subir(){ 

if($_FILES['file']['name']){ 

// Creamos la cadena aletoria 
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; 
$cad = ""; 
for($i=0;$i<12;$i++) { 
$cad .= substr($str,rand(0,62),1); 
} 

// Fin de la creacion de la cadena aletoria 
 

// Leemos el tamaño del fichero 
$tamaño_max="5000000"; // Tamaño maximo permitido 
if( $tamano < $tamaño_max){ // Comprovamos el tamaño  
$destino = 'cvs' ; // Carpeta donde se guardata 
$sep=explode('application/',$_FILES["file"]["type"]); // Separamos image/ 

$tipo=$sep[1]; // Optenemos el tipo de imagen que es 

if($tipo == "doc" || $tipo == "pdf" || $tipo == "docx"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
 

move_uploaded_file ( $_FILES [ 'file' ][ 'tmp_name' ], $destino . '/'.$cad.'.'.$tipo);  // Subimos el archivo
 
 	$namef=$cad.'.'.$tipo;
	
	mysql_query("INSERT INTO postulados(nombre,correo,telefono,grado,especialidad,cv,genero,celular,nivel,asignatura)VALUES ('$_POST[nombre]','$_POST[correo]','$_POST[telefono]','$_POST[grado]','$_POST[especialidad]','$namef','$_POST[genero]','$_POST[celular]','$_POST[nivel]','$_POST[asignatura]')")or die("problemas en el Select entrar".mysql_error());
	
	
	$headers="";
$sendTo = "jppicazo@badenpowell.edu.mx"; 

$subject = "SE REGISTRO UN NUEVO POSTULANTE"; 
$nombre = $_POST['nombre']; 
$email = $_POST['correo']; 
$url = 'http://www.badenpowell.edu.mx/reclutamiento/cvs/'.$namef; 
$message = $_POST['especialidad']; 
 
$hea= "DATOS DEL USUARIO QUE SE HA REGISTRADO"; 

$message = "\n\n " . $hea ."\nNombre: " . $nombre . "\nE-mail: " . $email . "\nCurriculum: " . $url. "\nCarrera o Profesion: " . $message; 
 

if(mail($sendTo, $subject, $message, $headers)){
	
}else{

}
	?>
    
	<script>
	window.alert("Gracias por Registrarte");
	</script>
	<?php
 
} 
else echo "el tipo de archivo no es de los permitidos";// Si no es el tipo permitido lo desimos 
} 
else echo "El archivo supera el peso permitido.";// Si supera el tamaño de permitido lo desimos 
} 	
	}
	




?>