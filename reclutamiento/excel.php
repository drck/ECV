<?php
@session_start();

header('Content-type: application/vnd.ms-excel'); 


header("Content-Disposition: attachment; filename=archivo.xls"); 


 header("Pragma: no-cache"); 


 header("Expires: 0");
include("config.php");
if(isset($_REQUEST['id'])){
$query = "delete from postulados where id='".$_REQUEST['id']."'  ";
	$result = mysql_query($query)
	or die("problemas en el Select entrar".mysql_error());
	
}else{
	
	
	}


if(isset($_POST['usuario'])&&$_POST['usuario']=="Admin"&& $_POST['pass']=="bpr2013@"){
	
	
	$_SESSION["usuario"]=$_POST['usuario'];
	
	};
	if(isset($_SESSION["usuario"])){

 ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Reclutamiento y Seleccion</title>
  
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script>
function buscar(){
	
	var variable=document.getElementById("busqueda").value;
	var variable2="<?php if(isset($_REQUEST['ord'])){ echo $_REQUEST['ord'];} ?>";
	if(variable&&!variable2){
		window.location="Admin.php?ft="+variable;
		}
		else if(variable&&variable2)
		{
		window.location="Admin.php?ft="+variable+"&ord="+variable2;
		}else{
			window.location="Admin.php?ft="+variable+"&ord="+variable2;
			}	
	}
	function seguro(id){
		
if(confirm("Seguro que desea Eliminar este Registro")){
	window.location="Admin.php?id="+id;
	
	}
    
		}
</script>

</head>

<body style="background-image:url(bphome/fondo.jpg); background-repeat:no-repeat; background-attachment:fixed;">

<div style="background-color: #333; opacity:0.8; filter:alpha(opacity=40);">

<div style="  position: absolute; width:1020px; margin-left: -510px; padding: 0px 0px 0px 30px; left:50%; ">

<div align="center" class="reg" style="left: 0; box-shadow: 0px 10px 30px #666; width: 1020px; height: 700px; background-color:#F4F4F4; top:30px; position: absolute;">

<H1  style="color:#930; margin-top:20PX; text-shadow:10px 0px 10px #CCC;  font-size:36px;"><strong> RECLUTAMIENTO Y SELECCION</strong> </H1>

<br>

<div style="width:950px; font-family:'Times New Roman', Times, serif;  margin-top:10px; overflow:auto;" >
<table  width="1500px"  bordercolor="#000000"   border="1">
<?php if(isset($_REQUEST['ft'])){?>
  <tr style="color:#FFF; background-color:#000;" >
    <td style="padding:5px;" width="200px"><a href="Admin.php?ord=nombre">Nombre</a></td>
    <td width="200px"><a href="Admin.php?ord=correo&ft=<?php echo $_REQUEST['ft'] ?>">Email</a></td>
    <td width="100px" ><a href="Admin.php?ord=genero&ft=<?php echo $_REQUEST['ft'] ?>">Genero</a></td>
    <td width="100px"><a href="Admin.php?ord=telefono&ft=<?php echo $_REQUEST['ft'] ?>">Telefono</a></td>
    <td width="15
    0px"><a href="Admin.php?ord=grado&ft=<?php echo $_REQUEST['ft'] ?>">Grado de Estudios</a></td>
    <td width="200px"><a href="Admin.php?ord=especialidad&ft=<?php echo $_REQUEST['ft'] ?>">Especialidad/Carrera</a></td>
    <td width="100px"><a href="Admin.php?ord=asignatura&ft=<?php echo $_REQUEST['ft'] ?>">Asignatura a impartir</a></td>
    <td width="100px"><a href="Admin.php?ord=celular&ft=<?php echo $_REQUEST['ft'] ?>">Celular</a></td>
    <td width="100px"><a href="Admin.php?ord=nivel&ft=<?php echo $_REQUEST['ft'] ?>">Nivel Interesado</a></td>
    <td width="100px;"><a href="Admin.php?ord=fecha&ft=<?php echo $_REQUEST['ft'] ?>">Fecha</a></td>
    <td width="100px;">Curriculum</td>
  </tr>
  
  <?php }else{ ?>
  
    <tr style="color:#FFF; background-color:#000;" >
    <td style="padding:5px;" width="200px"><a href="Admin.php?ord=nombre">Nombre</a></td>
    <td width="200px"><a href="Admin.php?ord=correo">Email</a></td>
    <td width="100px" ><a href="Admin.php?ord=genero">Genero</a></td>
    <td width="100px"><a href="Admin.php?ord=telefono">Telefono</a></td>
    <td width="15
    0px"><a href="Admin.php?ord=grado">Grado de Estudios</a></td>
    <td width="200px"><a href="Admin.php?ord=especialidad">Especialidad/Carrera</a></td>
    <td width="100px"><a href="Admin.php?ord=asignatura">Asignatura a impartir</a></td>
    <td width="100px"><a href="Admin.php?ord=celular">Celular</a></td>
    <td width="100px"><a href="Admin.php?ord=nivel">Nivel Interesado</a></td>
    <td width="100px"><a href="Admin.php?ord=nivel">Fecha</a></td>
    <td width="100px;">Curriculum</td>
    <td width="100px;"></td>
  </tr>
  
  <?php }
if(isset($_REQUEST['ft'])){
	$filtro=$_REQUEST['ft'];
$where="WHERE nombre like '%$filtro%' or correo like '%$filtro$' or genero like '%$filtro%' or telefono like '%$filtro%' or grado like '%$filtro%' or especialidad like '%$filtro%' or asignatura like '%$filtro%' or nivel like '%$filtro%' or celular like '%$filtro%'";
	}else{$where="";}
  if(isset($_REQUEST['ord'])){
$orden="order by ".$_REQUEST['ord']." asc";
  }else{$orden="";}
		$query = "select * from postulados $where  $orden  ";
		
			
			
	$result = mysql_query($query)
	or die("problemas en el Select entrar".mysql_error());
	
  $con=0;
  while($row=mysql_fetch_array($result))
  {
	  $con++;
	  if($con%2==0)
	  $color='style="color:#FFF; background-color:#999;"';
	 
	  else
	   $color='style="color:#666; background-color:#FFF;"';
   ?>
   
  <tr  <?php echo $color; ?>>
    <td style="padding:5px;"><?php echo $row['nombre'];?></td>
    <td><?php echo $row['correo'];?></td>
     <td><?php echo $row['genero'];?></td>
    <td><?php echo $row['telefono'];?></td>
    <td><?php echo $row['grado'];?></td>
    <td><?php echo $row['especialidad'];?></td>
    <td><?php echo $row['asignatura'];?></td>
    
   
    <td><?php echo $row['celular'];?></td>
    <td>
	<?php echo $row['nivel'];?></td>
    <td><?php echo $row['fecha'];?></td>
   <?php if($row['cv']==""){ ?>
       <td><?php echo "<a  href='#'><button>Descargar CV</button></a>";  ?></td>
 <?php }else{
	 ?>
	  <td> <?php echo "<a target='_blank' href='cvs/".$row['cv']."'><button>Descargar CV</button></a>";?></td>
	 <?php
	 } ?>
      <td><a onClick='seguro(<?php echo $row['id']; ?>);' href='#'><button>Eliminar</button></a></td>
  </tr>
  <?php
   }?>
</table >
  </div>
  


      
      
   

  </div>
  </div>
</div>
  	
    
    
    

</div>

</body>
</html>
<?php }else
{
	?>
	<script>
	
    window.location="index.php?er=1";
    </script>
	
	<?php
	}
 ?>