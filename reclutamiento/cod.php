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
  
  if($tipo == "vnd.openxmlformats-officedocument.wordprocessingml.document"){

  	$tipo="docx";
  	
  }
  if($tipo == "msword"){
  	$tipo="doc";
  }
  

if($tipo == "PDF" || $tipo == "pdf" || $tipo == "docx" || $tipo == "doc"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
 

move_uploaded_file ( $_FILES [ 'file' ][ 'tmp_name' ], $destino . '/'.$cad.'.'.$tipo);  // Subimos el archivo
 
 	$namef=$cad.'.'.$tipo;
	
	mysql_query("INSERT INTO postulados(nombre,correo,telefono,grado,especialidad,cv,genero,celular,nivel,asignatura,fecha)VALUES ('$_POST[nombre]','$_POST[correo]','$_POST[telefono]','$_POST[grado]','$_POST[especialidad]','$namef','$_POST[genero]','$_POST[celular]','$_POST[nivel]','$_POST[asignatura]',now())")or die("problemas en el Select entrar".mysql_error());
	
	
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type:text/html; charset=iso-8859-1\r\n";
	$headers.="From: COLEGIO BADEN POWELL<rp@badnpowell.edu.mx>";
$sendTo = "jppicazo@badenpowell.edu.mx,cflores@ecvconsulting.com,rh@badenpowell.edu.mx"; 
//$sendTo = "dgonzalez@ecvconsulting.com";
$subject = "SE REGISTRO UN NUEVO POSTULANTE"; 
$nombre = $_POST['nombre']; 
$email = $_POST['correo']; 
$url = 'http://www.badenpowell.edu.mx/reclutamiento/cvs/'.$namef; 
$message = $_POST['especialidad']; 
 
$hea= "DATOS DEL USUARIO QUE SE HA REGISTRADO"; 
$message="<html><body>";
//este es el codigo del mensaje se supone que la imagen q subes tiene una ruta es lo que debes poner aqui en la etiqeta <img>
$message .= "<BR><img src='http://badenpowell.edu.mx/reclutamiento/logo.png' width='100px' height='100px' /><BR> " . $hea ."<BR>Nombre: " . $nombre . "<BR>E-mail: " . $email . "<BR>Curriculum: " . $url. "<BR>Carrera o Profesion: " .$_POST['especialidad']."<BR>Telefono: " . $_POST['telefono']."<BR>Grado de Estudios: " .$_POST['grado']."<BR>Genero: ".$_POST['genero']."<BR>Celular: ".$_POST['celular']."<BR>Nivel deseado: ".$_POST['nivel']."<BR>Asignatura: ".$_POST['asignatura']; 
 

if(mail($sendTo, $subject, $message, $headers)){
	
}else{
echo"Error al enviar";
}
	?>
    
	<script>
	window.alert("Gracias por Registrarte");
	</script>
	<?php
 
}else{ 
?>
    
	<script>
	window.alert("Archivo No Valido");
	</script>
	<?php

}

}
else 
{
	echo "El archivo supera el peso permitido.";// Si supera el tamaño de permitido lo desimos 
} 	
	
	}
	
}



?>
