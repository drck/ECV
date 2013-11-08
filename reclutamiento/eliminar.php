<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar</title>
</head>

<body>
<?php
include("config.php");
if($_REQUEST['id']){
$query = "delete from postulados where id='".$_REQUEST['id']."'  ";
	$result = mysql_query($query)
	or die("problemas en el Select entrar".mysql_error());
	?>
	<script>
   window.location="Admin.php";
    </script>
	<?php
}else{
	?>
	<script>
   window.location="Admin.php";
    </script>
	<?php
	
	}
?>


</body>
</html>