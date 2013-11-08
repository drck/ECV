<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
 <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>ECV Log In</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body  id="bd" >
<center>
<table width="1025" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1024" height="12" background="images/bphome_01.jpg" >   </td>
  </tr>
  <tr>
    <td width="1024" height="84" background="images/bphome_02.jpg"> 
    <div style=" float:right; margin-top:10px; margin-right:20px;"> 
    
     <div  title=" Pago en Linea" onclick="window.location='http://pagoenlinea.badenpowell.edu.mx/'" style="cursor:pointer; background-image:url(images/bt_pagoenlinea.png); width:127px; height:23px;  "> </div>
    
    <div title="Comentarios y Sugerencias" onclick="window.location='index.php?option=com_foxcontact&view=foxcontact&Itemid=294'"   style=" cursor:pointer; background-image:url(images/bt_comentarios.png); margin-top:8px;  width:127px; height:23px; "> </div> <BR>
     </div>
     <div onclick="window.location='index.php'" style="cursor:pointer;  float:left; width:150px; height:65px;  margin-top:20px; margin-right:60px;"> </div>
     
     </td>
  </tr>
  <tr>
    <td   align="center" >
	<div style="height:27px; background-image:url(images/bphome_03.jpg)" ><jdoc:include type="modules" name="MenuSuperior" /></div>
	</td>
  </tr>
   <tr>
    <td   align="center" >
    
	</td>
  </tr>
</table>
</center> 
    
    
    <?php

include("config.php");
include("cod.php");
if(isset($_POST["nombre"])){
	subir();
 }


?>


<div style="color:#000" background="fondo.jpg">
<div>
<div style="  position: absolute; width:850px; margin-left: -425px; padding: 0px 20px 0px 30px; left:50%; ">

<div class="reg" style="left: 0; top: 3px; width: 600px; height: 1050px; background-image: url(img/cuadrologin.png); position: absolute;">
<br>
  
  <p>  <p align="center" style=" height:113px;"> </p>
  <p>&nbsp;</p>
  
 <h1 align="center" style="font-size:30px"> </h1>
  
  <form enctype="multipart/form-data" method="post" class="login" name="login" action="index.php">
  
       <div id="id1" style="display:block; margin-left:30px">
  <p>
    <label for="Nombre">Nombre:</label>
      <input style="width:250px;"  type="text" required name="nombre" placeholder="Nombre y Apellidos" id="name"  autofocus >
    </p>

    <p>
      <label for="password">Email:</label>
      <input name="correo" style="width:250px;" required type="email"   id="email"  >
      
       
    </p>
    <p>
      <label for="email"  style="width:242px">Genero:</label>
     <select id="genero" name="genero">
       <option id="genero" >Masculino</option>
       <option id="genero">Femenino</option>
     </select><br>
    </p>
    
    <p>
      <label  style=" width:140px" for="email">Telefono:</label>
      <input required type="tel" name="telefono"   style="width:210px;" id="phone" >
      
    </p>
     <p>
       <label for="email">Celular:</label>
      <input required type="tel" name="celular"   style="width:250px;" id="phone" >
    </p>
      
      <label for="email" style=" width:220px; margin-left:-20px;">Grado de Estudios:</label>
     <select style="width:150px" id="genero" name="grado">
       <option id="genero" >Secundaria</option>
       <option id="genero">Preparatoria</option>
       <option id="genero" >Licenciatura</option>
       <option id="genero">Posgrado</option>
       
     </select><br>
    </p>

    <p>
      <label style=" width:150px" >Especilidad/ Carrera:</label>
      <input required name="especialidad"   type="text"  id="especialidad"  >
      
       
    </p>
   
    <p>
      <label style=" width:200px" for="cv">Nivel que le interesa </label>
      <select style="width:150px" id="genero" name="nivel">
       <option id="genero" >Prescolar</option>
       <option id="genero">Primaria</option>
       <option id="genero" >Secundaria</option>
       <option id="genero">Preparatoria</option>
       
     </select><br>
    </p>
    <p>
      <label style=" width:150px" for="cv">Asignatura a Impartir</label>
      <input required name="asignatura"   type="text"  id="asignatura"  >
    </p>
     <p>
      <label style=" width:250px" for="cv">Curriculum Vitae: (.pdf )</label>
      <input required type="file" name="file" id="file"   >
    </p>
     
  
   

  <div align="center">
      <button value="Enviar" type="submit">
    Enviar
      </button>
      <button value="Regresar" type="button" onClick="window.location='http://www.badenpowell.edu.mx/'">
  Regresar
      </button>
      </div>
      
      </div>
      
      
      
   
    
    
  </form>
  </div>
  <div style="position:absolute; top:20px; right:0;">
  <img src="img/banner-exalumnos.png" width="300px"  >
   <h1 style=" color:#000;" align="center">LOGIN</h1><br>
 <div style="width:240px;  color:#000;padding: 0px 0px 0px 60px;"> 

  Usuario:<br>
  <form name="login">
  <input type="text" name="usuario">
   <br> Contraseña:<br>
   
  <input type="password" name="pass"><br>
  <div align="right" style="margin-right:40px; margin-top:10px;">
  <input  type="submit" value="Entrar">
  </div>
  </form>
  </div></div>
</div>
  



</body>
</html>