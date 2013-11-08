<?php 
@session_start();
 ?>
 <!DOCTYPE HTML>

<html>
	<head>
		<title>SISTEMA  CLASIFICADOR DE IMAGENES</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,800" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Oleo+Script:400" rel="stylesheet" type="text/css" />
        <link href="shadowbox/shadowbox.css" rel="stylesheet" type="text/css" />  
<script type="text/javascript" src="shadowbox/jquery-1.2.6.js"></script>  
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>  
<script type="text/javascript"> Shadowbox.init({ language: "es", players: ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'],onClose: function(){ window.location.reload();} }); </script> 

		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI_titleBarOverlaid=1&amp;mobileUI_titleBarHeight=60&amp;viewport_is1000px=1060&amp;mobileUI_openerWidth=80"></script>
		<noscript>
			<link rel="stylesheet" href="css/5grid/core.css" />
			<link rel="stylesheet" href="css/5grid/core-desktop.css" />
			<link rel="stylesheet" href="css/5grid/core-1200px.css" />
			<link rel="stylesheet" href="css/5grid/core-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
<body class="homepage">
		
    
		<!-- Header Wrapper -->
		  <div id="header-wrapper">
				<div class="5grid-layout">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
						  <header style=" border-bottom: groove; border-bottom-color:#333" id="header">
								
									<!-- Logo -->
										<div  id="logo">
											<h1 align="center"><a href="index.php" class="mobileUI-site-name">Smart Gallery</a></h1>
										</div>
									
							  <!-- Nav -->
								</header>

						</div>
					</div>
				</div>
</div>
		
		<!-- Banner Wrapper -->
			<div align="center" style="" id="banner-wrapper">
			  <?php
                                         
$z=count($_SESSION['fotos']);
if(isset($_POST['consulta'])) {

$_SESSION['fotos'][] = $_POST['consulta'];
}

if($z>=0){
	for($x=0;$x<=$z;$x++){
		if($_SESSION['fotos'][$x]!=""){
			//star if 
			
		
		
		$co=$_SESSION['fotos'][$x];
					$busqueda="descripcion like '%$co%'";
					if($x>0){
						$concatena=$concatena." and ".$busqueda;
						}else{
							$concatena=$busqueda;
							}
							?>
                       
					
									
		<?php // end if
		
		}
		//end for		
		}
		if($concatena){
		 $criterio=" where ".$concatena;  }
	}
 
?>
</div>
		
		<!-- Features Wrapper -->
			<div id="features-wrapper">
				<div class="5grid-layout">
                 <?php 
				
			
					
				 		include('conect.php');
		$query = "select * from fotos $criterio  ";
	$result = mysql_query($query)
	or die("problemas en el Select entrar".mysql_error());
	
  $con=0;
  while($row=mysql_fetch_array($result))
  {
	  $con++;
	  if($con==4){
		  $con=1;
	  }
	  if($con==1){
  ?>
					<div class="row">
                    <?php }?>
						<div class="4u">
						
							<!-- Box -->
								<section class="box box-feature">
								  <a rel="shadowbox;width=772px;height=500px;" title="Foto" href="uploaded/<?php echo $row[nombre] ?>" class="image image-full"><img src="uploaded/<?php echo $row[nombre] ?>" alt="" /></a>
									
								</section>

						</div>
						
                        <?php  if($con==3){?>
					</div>
                    <?php }
					
  }
  
  ?>
                    
      
                    
				</div>
			</div>

		<!-- Main Wrapper --><!-- Footer Wrapper -->
			<div id="footer-wrapper"></div>

</body>
</html>
