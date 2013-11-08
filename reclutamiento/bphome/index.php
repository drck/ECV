

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<head>

<style type="text/css">
#ja-header,#ja-mainnav,#ja-container,#ja-botsl,#ja-footer {width: <?php echo $tmpWidth; ?>;margin: 0 auto;}
#ja-wrapper {min-width: <?php echo $tmpWrapMin; ?>;}
body {
	background-image: url(<?php echo $tmpTools->templateurl(); ?>/images/back.jpg);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

</head>

<body  id="bd" >
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
</table>
<table width="1025" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="1010" border="0" align="left" cellpadding="2" cellspacing="2">
      <tr>
        <td width="240" rowspan="2" valign="top"><jdoc:include type="modules" name="left"/></td>
        <td width="10" rowspan="2" valign="top">&nbsp;</td>
        <td width="826" style="position: relative;   z-index: 0;"  valign="top"></td>
      </tr>
      <tr>
        <td valign="top"><table width="748" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td width="466" valign="top"><jdoc:include type="modules" name="bannerhome1" /></td>
            <td width="268" align="center" valign="top"><jdoc:include type="modules" name="bannerhome2" /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF"><jdoc:include type="modules" name="Legal" /></td>
  </tr>
</table>
<p><br />
<jdoc:include type="modules" name="right" />
<jdoc:include type="modules" name="debug" />
</p>

<map name="Map" id="Map">
 <area shape="rect" coords="20,4,160,79" href="index.php" />
  
  </map>
</body>
</html>