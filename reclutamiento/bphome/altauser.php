<?php

include("config.php");

if(isset($_POST["nombre"])){
	
	mysql_query("INSERT INTO historial_usuario_clases(empresa,giro,departamento,ocupación,cargo,generación,ingreso,egreso,máximo,carrera,universidad,especialidad,titulado,lugar,domicilio,calle,colonia,código,estado,municipio,celular,oficina,casa,fecha,genero,email,nombre
)VALUES ($_POST[‘empresa’],$_POST[‘giro’],$_POST[‘departamento’],$_POST[‘ocupación’],$_POST[‘cargo’],$_POST[‘generación’],$_POST[‘ingreso’],$_POST[‘egreso’],$_POST[‘máximo’],$_POST[‘carrera’],$_POST[‘universidad’],$_POST[‘especialidad’],$_POST[‘titulado’],$_POST[‘lugar’],$_POST[‘domicilio’],$_POST[‘calle’],$_POST[‘colonia’],$_POST[‘código’],$_POST[‘estado’],$_POST[‘municipio’],$_POST[‘celular’],$_POST[‘oficina’],$_POST[‘casa’],$_POST[‘fecha’],$_POST[‘genero’],$_POST[‘email’],$_POST[‘nombre’])")or die("problemas en el Select entrar".mysql_error());

	}


?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>ECV Log In</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body background="fondo.jpg">
<div style="  position: absolute; width:850px;  padding: 0px 20px 0px 30px; left:50%; margin-left: -425px">

<div class="reg" style="left:0; top:40px; width:450px; height:626px; background-image:url(img/cuadrologin.png); position:absolute;">
<br>
  
  <p>  <p align="center" style=" height:113px;"> </p>
  <p>&nbsp;</p>
  
 <h1 align="center" style="font-size:46px"> </h1>
  
  <form  method="post" class="login" name="login" action="altauser.php">
  
       <div id="id1" style="display:bloack; margin-left:30px">
  <p>
    <label for="Nombre">Nombre:</label>
      <input style="width:230px;"  type="text" name="nombre" placeholder="Nombre y Apellidos" id="name" required autofocus >
    </p>

    <p>
      <label for="password">Email:</label>
      <input name="email" style="width:230px;" placeholder="name@example.com": required type="email"  id="email"  >
      
       
    </p>
    <p>
      <label for="email" style="width:222px">Genero:</label>
     <select id="genero" name="genero">
       <option id="genero" >Masculino</option>
       <option id="genero">Femenino</option>
     </select><br>
    </p>
     <p >
      <label style="width:200px; "   for="email">Fecha de Nacimiento:</label>
      <input type="date" name="fecha"  style="width:130px"  id="puesto" >
    </p>
    <p>
      <label style=" width:130px" for="email">Telefono Casa:</label>
      <input type="tel" name="casa"   style="width:200px;" id="phone" >
      
    </p>
     <p>
      <label style=" width:130px;"  for="email">Telefono Oficina:</label>
      <input type="tel" name="oficina"   style="width:200px;" id="phone" >
      
    </p>
     <p>
      <label for="email">Celular:</label>
      <input type="tel" name="celular"   style="width:230px;" id="phone" >
      
    </p>
  
    

  <div align="center">

      <button value="Sigiente" type="button" onClick="mostrar2();">
    Siguiente
      </button>
    
      
    
      </button>
      </div>
      <div id="hoja" style="color:#900; margin-left:15px;" align="left">
             Hoja 1 de 4  
     
      </div>
      </div>
      
      <div style=" margin-left:20px;">
      <div id="id2"  style="display:none;  position:absolute; left:10">
       <p>
    <label style=" width:150px" for="Nombre">Lugar de nacimiento:</label>
      <input type="text" name="lugar" id="lugar" autofocus >
    </p>

    <p>
      <label style=" width:150px" for="password">Domicilio:</label>
      <input name="domicilio"   type="text"  id="domicilio"  >
      
       
    </p>
    <p>
      <label style=" width:150px" for="email">Calle y número:</label>
      <input type="text" name="calle" id="calle"   >
    </p>
     <p>
      <label style="width:200px" for="email">Código postal:</label>
      <input  type="text" name="codigo" style="width:150px;"  id="codigo" >
    </p>
    <p>
      <label style="width:200px" for="email">Colonia:</label>
      <input type="text" name="colonia"   style="width:150px;" id="colonia" >
      
    </p>
     <p>
      <label style="width:200px" for="email">Estado:</label>
      <select id="genero" name="estado">
       <?php estados(); ?>
     </select>
      
    </p>
     <p>
      <label style=" width:200px" for="email">Ciudad/Municipio/Delegación:</label>
      <input type="text" name="municipio"   style="width:150px;" id="phone" >
      
    </p>
  
   

  <div align="center">
      <button value="Sigiente" type="button" onClick="mostrar3();">
    Siguiente
      </button>
      <button value="Regresar" type="button" onClick="mostrar1();">
  Regresar
      </button>
      </div>
      <div id="hoja" style="color:#900; margin-left:15px;" align="left">
             Hoja 2 de 4  
     
      </div>
      </div>
      </div>
      
      <div id="id3" style="display:none">
    <p>
    <label style="width:200px" for="Nombre">Generación Baden :</label>
      <input style="width:180px" type="text" name="generacion"  id="generacion" autofocus >
    </p>

    <p>
      <label style="width:264px" for="password">Nivel de ingreso en Baden:</label>
      
     <select id="genero" name="ingreso">
        <option value="Kinder">Kinder</option>
        <option value="Primaria">Primaria</option>
        <option value="Secundaria">Secundaria</option>
        <option value="Preparatoria">Preparatoria</option>
      </select>
      
       
    </p>
    <p>
      <label style="width:264px" for="email">Nivel de egreso de Baden:</label>
      <select id="genero" name="egreso">
        <option value="Kinder">Kinder</option>
        <option value="Primaria">Primaria</option>
        <option value="Secundaria">Secundaria</option>
        <option value="Preparatoria">Preparatoria</option>
      </select>
    </p>
     <p>
      <label  style="width:264px" for="email">Grado máximo de estudios::</label>
     <select id="genero" name="maximoo">
<option value="Primaria">Primaria</option>
        <option value="Secundaria">Secundaria</option>
        <option value="Preparatoria">Preparatoria</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Posgrado">Posgrado</option>
      </select>
    </p>
    <p>
      <label style="width:200px" for="email">Carrera/Profesión:</label>
      <input type="text" name="carrera"   style="width:180px;" id="carrera" >
      
    </p>
     <p>
      <label style="width:200px" for="email">Universidad:</label>
      <input type="tel" name="universidad"   style="width:180px;" id="universidad" >
      
    </p>
     <p>
      <label style="width:320px;" for="email">Titulado:</label>
     <select id="genero" name="titulado">
       <option value="Si">Si</option>
       <option value="No">No</option>
     </select>
    </p>
  
    <p>
      <label style="width:200px;"for="email">Especialidad/Diplomado:</label>
       <input style="width:180px;" type="text"   name="especialidad" id="especialidad" >
    </p>
<div align="center">
  
      
     <button value="Sigiente" type="button" onClick="mostrar4();">
    Siguiente
      </button>
      <button value="Regresar" type="button" onClick="mostrar2();">
  Regresar
      </button>
      </div>
         <div id="hoja" style="color:#900; margin-left:15px;" align="left">
             Hoja 3 de 4  
     
      </div>
      </div>
      
      
      <div id="id4" style="display:none">
    <p>
     	
    <label style="width:180px;" for="Nombre">Ocupación:</label>
      <select id="genero" name="ocupacion">
        <option value="Estudiante">Estudiante</option>
        <option value="Empleado">Empleado</option>
        <option value="Empresario">Empresario</option>
        <option value="Hogar">Hogar</option>
        <option value="Desempleado">Desempleado</option>
      </select>
    </p>

    <p>
      <label style="width:180px;" for="password">Empresa:</label>
      <input name="email"  type="text"  id="empresa"  >
      
       
    </p>
    <p>
      <label style="width:180px" for="email">Giro de la empresa:</label>
      <input type="text" name="giro" id="giro"   >
    </p>
     <p>
      <label style="width:180px" for="email">Departamento o Área:</label>
      <input type="text" name="departamento" style="width:130px;"  id="departamento" >
    </p>
    <p>
      <label style="width:180px" for="email">Cargo o puesto:</label>
      <input type="text" name="cargo"   style="width:150px;" id="cargo" >
      
    </p>
     
     
  
    
<div align="center">
  
      
      <button value="Guardar" type="submit" >
    Guardar
      </button>
      <button value="Regresar" type="button" onClick="mostrar3();">
    Regresar
      </button>
      <br><br><br><br><br><br><br>
      </div>
      
         <div id="hoja" style="color:#900; margin-left:15px;" align="left">
             Hoja 4 de 4  
     
      </div>
      </div>
   
    <script>
	function mostrar1(){
	
document.getElementById('id1').style.display = 'block';
document.getElementById('id2').style.display = 'none';
document.getElementById('id3').style.display = 'none';
document.getElementById('id4').style.display = 'none';
}
function mostrar2(){
	
document.getElementById('id2').style.display = 'block';
document.getElementById('id1').style.display = 'none';
document.getElementById('id3').style.display = 'none';
document.getElementById('id4').style.display = 'none';
}
function mostrar3(){
	document.getElementById('id1').style.display = 'none';
document.getElementById('id3').style.display = 'block';
document.getElementById('id2').style.display = 'none';
document.getElementById('id4').style.display = 'none';
}
function mostrar4(){
	document.getElementById('id1').style.display = 'none';
document.getElementById('id4').style.display = 'block';
document.getElementById('id2').style.display = 'none';
document.getElementById('id3').style.display = 'none';
}
</script>
    
  </form>
  </div>
  <div style="position:absolute; top:40px; right:0;">
  <img src="img/banner-exalumnos.png" width="100%"  >
   </div>
</div>
  
</body>



</html>
