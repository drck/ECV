<?php
function subir(){ 

if($_FILES['file']['name']){ 


$destino = 'cvs' ; // Carpeta donde se guardata 
$sep=explode('application/',$_FILES["file"]["type"]); // Separamos image/ 

$tipo=$sep[1]; // Optenemos el tipo de imagen que es 

move_uploaded_file ( $_FILES [ 'file' ][ 'tmp_name' ], $destino . '/'.$cad.'.'.$tipo);  // Subimos el archivo
 
 	$namef=$cad.'.'.$tipo;

	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type:text/html; charset=iso-8859-1\r\n";
	$headers.="From: COLEGIO BADEN POWELL<rp@badnpowell.edu.mx>";
	$sendTo = "jppicazo@badenpowell.edu.mx,cflores@ecvconsulting.com,rh@badenpowell.edu.mx"; 

$subject = "SE REGISTRO UN NUEVO POSTULANTE"; 

$message="<html><body>";
//este es el codigo del mensaje se supone que la imagen q subes tiene una ruta es lo que debes poner aqui en la etiqeta <img>
$message .= "<BR><img src='http://badenpowell.edu.mx/reclutamiento/logo.png' width='100px' height='100px' /><BR> " ; 
$message="</body></html>";
if(mail($sendTo, $subject, $message, $headers)){
	
}else{
echo"Error al enviar";
}

}
	?>
 