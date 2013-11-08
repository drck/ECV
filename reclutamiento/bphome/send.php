<?php
include("securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);

  if($valid == true) {


$headers="";
$sendTo = "drack_107@hotmail.com"; 
$subject = "TE HAN CONTACTADO POR LA PAGINA DE ECV"; 
$nombre = $_POST['name']; 
$email = $_POST['email']; 
$url = $_POST['url']; 
$message = $_POST['message']; 
 
$hea= "DATOS DEL USUARIO QUE ESTA CONTACTANDO DEDE ECVCONSULTING.COM"; 

$message = "\n " . $hea ."\nNombre: " . $nombre . "\nE-mail: " . $email . "\nPAGINA: " . $url. "\n\nMensaje: " . $message; 
 

if(mail($sendTo, $subject, $message, $headers)){
	
}else{

}
    
  } else {
    echo "<center>Error, el codigo introducido no es valido.  <a href=\"javascript:history.go(-1)\">Reintentar</a> to try again.</center>";
  }

?>



<script>

window.alert("TU MENSAJE FUE ENVIADO");

window.location="contacto.html"



</script>