<!DOCTYPE html>
<html lang="en">
<head>
<title>Munanaflowers - High quality Ecuadorian roses and flowers export</title>
<meta name="title" content="Munanaflowers Export flowers">
<meta name="description" content="Company dedicated to the export of high quality Ecuadorian roses & flowers. Services: selection, quality control, consolidation and tracking client's orders">
<meta name="keywords" content="Munanaflowers, flowers, roses, export, bunchs, events, quality, Ecuador, company, flowers">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="icon" type="image/png" href="icon-munana.png">
<script type="text/javascript" src=cods/js-munana.js></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  type="text/css" media="(min-width: 800px)" href="css/hr-style.css" />
<link rel="stylesheet"  type="text/css" media="(max-width: 799px)" href="css/lr-style.css" />
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Organization",
	"name":"Munanaflowers",
	"legalName":"Munanaflowers S.A.",
	"url":"http://www.munanaflowers.com",
	"logo":"http://www.munanaflowers.com/imgs/iconlogo-munana.png",
	"description":"A company dedicated to the export of high quality Ecuadorian roses and flowers",
	"telephone":"+593 9 86019131",
	"location":{
		"@context":"http://schema.org/",
		"type":"Place",
		"address":"De las Amapolas E15-115 y Gral. Duma, Quito, Ecuador"
	},
	"owns":[
    		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Fresh cut flowers"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Spray roses"
            },
			{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Preserved roses"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Tinted roses"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Summer flowers"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Carnation"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Gypsophila"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Hydrangeas"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Hypericum"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Delphinium"
            },
       		{
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Anemones"
            },
            {
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Lilies"
            },
            {
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Molucella"
            },
            {
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Solidago"
            },
            {
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Stock"
            },
            {
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Ranunculus"
            },
            {
			"@context":"http://schema.org/",
			"type":"Product",
			"name":"Amaranthus hanging"
            }
	],	
	"email":"monica@munanaflowers.com",
	"founder":{
		"@context":"http://schema.org/",
		"type":"Person",
    	"name":"Monica Moreano"
    }    
}
</script>
</head>
<body> 

	<?php
		require_once("php/constants.php");
		/* if theres an error, show it */
		session_start();
		$has_error=isset($_GET[GET::$ERROR]);
		if($has_error){
			echo('
				<div id="id03" class="w3-container w3-center w3-red"><br>
					<div class="w3-center">
						<span onclick="document.getElementById(\'id03\').style.display=\'none\'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
					</div>
					<label><h1><b>'.$_GET[GET::$ERROR].'</b></h1></label>
				</div>
			');
		}
		
		$has_ok=isset($_GET[GET::$OK]);
		if($has_ok){
			echo('
				<div id="id03" class="w3-container w3-center w3-green"><br>
					<div class="w3-center">
						<span onclick="document.getElementById(\'id03\').style.display=\'none\'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
					</div>
					<label><h1><b>'.$_GET[GET::$OK].'</b></h1></label>
				</div>
			');
		}
		$issed_id_Usuario=isset($_SESSION[SESSION::$USER_ID]);
		if(!$issed_id_Usuario){
			echo('
			<div class="w3-container w3-right-align"><br>
				<button class="w3-btn w3-blue w3-round-xlarge" onclick="mostrarLog(\'1\',\'id01\');return mostrarModal(\'id01\');">SING IN</button>
				<button class="w3-btn w3-blue w3-round-xlarge" onclick="mostrarLog(\'2\',\'id02\');return mostrarModal(\'id02\');">SING UP</button>
			</div>
			');
		}else{
			require_once("php/db.php");
    		$db=new DataBase();
			$db->agregarAccion($_SESSION[SESSION::$USER_ID],$_SESSION[SESSION::$USER_ID_COUNTRY]);
			if($_SESSION[SESSION::$USER_ROL]=='ADMIN')
			{
				echo('
					<div class="w3-container w3-right-align"><br>
						<div class="w3-dropdown-hover" >
							<button class="w3-btn w3-blue">'.$_SESSION[SESSION::$USER_NAME].'</button>
							<div class="w3-dropdown-content w3-white w3-card-4" style="right:0">
								<form action="php/panel/infopanel.php" method="post">
									<button class="w3-btn-block w3-gray w3-padding" type="submit">PANEL DE CONTROL</button>
									<input type="hidden" name="N" value="1"></input>
								</form>
								<form action="php/salir.php" method="post">
									<button class="w3-btn-block w3-green w3-padding" type="submit">SALIR</button>
								</form>
							</div>
						</div>
					</div>
				');
			}else{
				echo('
					<div class="w3-container w3-right-align"><br>
						<div class="w3-dropdown-hover" >
							<button class="w3-btn w3-blue">'.$_SESSION[SESSION::$USER_NAME].'</button>
							<div class="w3-dropdown-content w3-white w3-card-4" style="right:0">
								<form action="php/salir.php" method="post">
									<button class="w3-btn-block w3-green w3-padding" type="submit">SALIR</button>
								</form>
							</div>
						</div>
					</div>
				');
			}
		}
		
	?>


<h1 class="titulo1">MUNANAFLOWERS S.A. - High quality Ecuadorian roses and flowers export</h1>
<img class="boton-home" src="imgs/botones/boton-home.png" alt="Up" width="40" height="57">
<div id="bloq-titulo">
	<div id="home"></div>
	<div class="logo-inicio"><img class="logo-inicio" src="imgs/munana-logo.png" alt="Munanaflowers S.A." width="446" height="90"></div>

		

	<div class= "boton_menu en">
		<img id="bcompany_en" src="imgs/botones/bcompany_en.png" alt="Company" width="160" height="27" class="en boton_menu">
	</div>
	<div class= "boton_menu en">
		<img id="bservices_en" src="imgs/botones/bservices_en.png" alt="Servicios" width="160" height="27" class="en boton_menu">
	</div>
	<div class= "boton_menu en">
		<img id="bproducts_en" src="imgs/botones/bproducts_en.png" alt="Products" width="160" height="27" class="en boton_menu">
	</div>
	<div class= "boton_menu en">
		<img id="bcontacts_en" src="imgs/botones/bcontacts_en.png" alt="Contact" width="160" height="27" class="en boton_menu">
	</div>
	<div class= "boton_menu sp">
		<img id="bcompany" src="imgs/botones/bcompany.png" alt="Company" width="160" height="27" class="sp boton_menu">
	</div>
	<div class= "boton_menu sp">
		<img id="bservices" src="imgs/botones/bservices.png" alt="Servicios" width="160" height="27" class="sp boton_menu">
	</div>
	<div class= "boton_menu sp">
		<img id="bproducts" src="imgs/botones/bproducts.png" alt="Products" width="160" height="27" class="sp boton_menu">
	</div>
	<div class= "boton_menu sp">
		<img id="bcontacts" src="imgs/botones/bcontacts.png" alt="Contact" width="160" height="27" class="sp boton_menu">	
	</div>

	<div  class="boton-lang">
		<img class="boton-lang" id="boton-sp" src="imgs/botones/boton-sp.png" alt="Boton-sp" width="35" height="40">	
		<img class="boton-lang" id="boton-en" src="imgs/botones/boton-en.png" alt="Boton-en" width="35" height="40">	
	</div>	
</div>


<div id="bloq-carousel">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="en" src="imgs/car/bp-rosas_en.jpg" alt="Roses" width="1500" height="405">
        <img class="sp" src="imgs/car/bp-rosas.jpg" alt="Roses" width="1500" height="405">
      </div>
      <div class="item">
        <img class="en" src="imgs/car/bp-ecuador_en.jpg" alt="Avion" width="1500" height="400">
        <img class="sp" src="imgs/car/bp-ecuador.jpg" alt="Avion" width="1500" height="400">
      </div>
      <div class="item">
        <img class= "en" src="imgs/car/bp-flores_en.jpg" alt="Ecuador" width="1500" height="400">
        <img class= "sp" src="imgs/car/bp-flores.jpg" alt="Ecuador" width="1500" height="400">
      </div>
      <div class="item">
        <img class="en" src="imgs/car/bp-arreglo_en.jpg" alt="Bunch" width="1500" height="400">
        <img class="sp" src="imgs/car/bp-arreglo.jpg" alt="Bunch" width="1500" height="400">
      </div>
      <div class="item">
        <img class="en"  src="imgs/car/bp-avion_en.jpg" alt="Flowers" width="1500" height="400">
        <img class="sp"  src="imgs/car/bp-avion.jpg" alt="Flowers" width="1500" height="400">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div id="bloq-services">
<div id="Servicios"></div>
<h2 class="subtitulo en" style="color:#ffffff;">SERVICES</h2>
<h2 class="subtitulo sp" style="color:#ffffff;" lang="es">SERVICIOS</h2>

	<div class="cuadro_serv">
        <div class="icon"><img class="icon" id="icon_consultoria" src="imgs/icon_consultoria.png" alt="Advice" width="164" height="135"></div>
	<div class="text1 en"><H3>ADVICE</H3>
	We guide you to complete your orders with products that meet your requirements.
	</div>
        <div class="text1 sp" lang="es"><H3>CONSULTOR&Iacute;A</H3>
	Lo guiamos para completar sus pedidos con productos que satisfagan sus requerimientos.
        </div>
        </div>
        
	<div class="cuadro_serv">
        <div class="icon"><img class="icon" id="icon_seleccion" src="imgs/icon_seleccion.png" alt="Selection" width="137" height="150"></div>
	<div class="text1 en"><H3>SELECTION</H3>
	We select the products from an extensive list of suppliers to efficiently complete your orders.
	</div>
        <div class="text1 sp" lang="es"><H3>SELECCI&Oacute;N</H3>
	Seleccionamos los productos entre una amplia lista de proveedores para completar sus pedidos de manera eficiente.
        </div>
        </div>

	<div class="cuadro_serv">
        <div class="icon"><img class="icon" id="icon_consolidacion" src="imgs/icon_consolidacion.png" alt="Consolidation" width="155" height="111"></div>
	<div class="text1 en"><H3>CONSOLIDATION</H3>
	We take care of the logistics, transport and consolidation of your orders with products from the best suppliers.
	</div>
        <div class="text1 sp" lang="es"><H3>CONSOLIDACI&Oacute;N</H3>
	Nos encargamos de la log&iacute;stica, el transporte y la consolidaci&oacute;n de sus pedidos con productos de los mejores proveedores.
        </div>
        </div>

	<div class="cuadro_serv">
        <div class="icon"><img class="icon" id="icon_calidad" src="imgs/icon_calidad.png" alt="Quality" width="158" height="125"></div>	
	<div class="text1 en"><H3>QUALITY</H3>
	We carry out quality control to guarantee the optimum state of your products.
	</div>
        <div class="text1 sp" lang="es"><H3>CALIDAD</H3>
	Realizamos control de calidad para garantizar el &oacute;ptimo estado de sus productos.
        </div>
        </div>

	<div class="cuadro_serv">
        <div class="icon"><img class="icon" id="icon_envio" src="imgs/icon_envio.png" alt="Tracing" width="122" height="110"></div>
	<div class="text1 en"><H3>TRACING</H3>
	We take care of the management and tracing of your products with the shipping agencies until the shipment to the port of destination.
	</div>
        <div class="text1 sp"><H3 lang="es">SEGUIMIENTO</H3>
	Nos encargamos de la gesti&oacute;n y el seguimiento de sus productos con las agencias de carga hasta el env&iacute;o al puerto de destino.
        </div>
        </div>

</div>

<div id="bloq-company">
	<div id="Company"></div>
	<h2 class="subtitulo en">COMPANY</h2>
	<h2 class="subtitulo sp" lang="es">EMPRESA</h2>

	<div class="txt-company en">
Munaflowers is a company with more than 20 years of experience in the export of high quality flowers. Thanks to our long history we have developed strong relationships with our partners and a great understanding of the market and its needs.<br><br>

Since our beginnings we have been committed to the satisfaction of our customers, guided by values and principles that guarantee quality and promote honesty and trust.<br><br>

We are able to offer products of great beauty, high quality and an optimal service with the aim of satisfying the highest requirements of our customers. Feel free to <a href="mailto:monica@munanaflowers.com">contact us</a>.	
	</div>
	
	<div class="txt-company sp" lang="es">
Munanaflowers es una empresa con m&aacute;s de 20 a&ntilde;os de experiencia en la comercializaci&oacute;n de flores de exportaci&oacute;n de alta calidad. Gracias a nuestra amplia trayectoria hemos desarrollado s&oacute;lidas relaciones con nuestros socios y una gran comprensi&oacute;n del mercado y sus necesidades.<br><br>

Desde nuestros inicios hemos estado comprometidos con la satisfacci&oacute;n de nuestros clientes, guiados por valores y principios que garantizan la calidad y propician la honestidad y la confianza.<br><br>

Ofrecemos productos de gran belleza, alta calidad y un servicio &oacute;ptimo enfocados en satisfacer los m&aacute;s altos requerimientos. No dude en <a href="mailto:monica@munanaflowers.com">contactarnos</a>.
	</div>
	
        <div class="pict-company">
        
		<img id="pict1" src="imgs/export-flowers.jpg" alt="Export Flowers" >
        
        </div>
        

	
</div>


<div id="bloq-galeria">
	<div id="Products"></div>
	<h2 class="subtitulo en">PRODUCTS</h2>
	<h2 class="subtitulo sp" lang="es">PRODUCTOS</h2>

	<div id="gal-contenedor">

	<div class="gal" id="gal-1">
		<h4 class="gal-subtitle en">LAST VARIETIES - ROSES</h4>
		<h4 class="gal-subtitle sp">&Uacute;LTIMAS VARIEDADES - ROSAS</h4>
	</div>

	<div class="gal" id="gal-2">
		<h4 class="gal-subtitle en">GYPSOPHILA</h4>
		<h4 class="gal-subtitle sp">GYPSOPHILA</h4>
	</div>

	<div class="gal" id="gal-3">
		<h4 class="gal-subtitle en">SUMMER FLOWERS</h4>
		<h4 class="gal-subtitle sp">FLORES DE VERANO</h4>
	</div>

	</div>

</div>


	<div id="ventana"> <div id="nombre"></div>  </div>
	<div id="transparente"></div>


</div>



<div id="bloq-contacto">
<div id="Contact"></div>
<h2 class="subtitulo en" style="color:#ffffff;">CONTACT</h2>
<h2 class="subtitulo sp" style="color:#ffffff;" lang="es">CONTACTO</h2>

<div class="contacto">
	<a href="mailto:monica@munanaflowers.com">
		<img id="logo-bn" src="imgs/munana-logo-bn.png" alt="Munanaflowers" width="253" height="43">
	</a>
	<div id="line_v"></div>
</div>


<div class="contacto en">
	<table>
		<tr><td class="fcont">Email:</td><td class="fcont">monica@munanaflowers.com <br> monica_moreanos@hotmail.com</td></tr>
		<tr><td class="fcont">Phones:</td><td class="fcont">+593 9 86019131 <br> +593 4 5037612</td></tr>
		<tr><td class="fcont">Skype:</td><td class="fcont">fmxmonica</td></tr>
		<tr><td class="fcont">Web:</td><td class="fcont">www.munanaflowers.com</td></tr>
	</table>
	<div id="line_v"></div>	
</div>

<div class="contacto sp" lang="es">
	<table>
		<tr><td class="fcont">Correo:</td><td class="fcont"><span id="mail1">monica@munanaflowers.com</span> <br> <span id="mail2"> monica_moreanos@hotmail.com</span></td></tr>
		<tr><td class="fcont">Tel&eacute;fonos:</td><td class="fcont">+593 9 86019131 <br> +593 4 5037612</td></tr>
		<tr><td class="fcont">Skype:</td><td class="fcont">fmxmonica</td></tr>
		<tr><td class="fcont">Sitio Web:</td><td class="fcont">www.munanaflowers.com</td></tr>
	</table>
	<div id="line_v"></div>	
</div>

<div class="contacto en">
<H4 style="color:white;font-family:sans,arial;margin:10px;">LINKS OF INTEREST</H4>
<ul>
<li>
About Ecuador
<ul>
<li><a class="links_interest" href="https://en.wikipedia.org/wiki/Ecuador" target="_blank">General information about Ecuador</a></li>
<li><a class="links_interest" href="https://ecuador.travel/" target="_blank">Tourism Ecuador</a></li>
</ul>
</li>

<li>
Air Transport
<ul>
<li><a class="links_interest" href="http://aeropuertoquito.aero/en/" target="_blank">Quito Airport</a></li> 
<li><a class="links_interest" href="http://touch.track-trace.com/aircargo" target="_blank">Track your flight</a></li> 
</ul>
</li>

<li>
Roses Industry
<ul>
<li><a class="links_interest" href="http://www.proecuador.gob.ec/pubs/analisis-sectorial-de-rosas-frescas/" target="_blank">Analysis of roses industry by PROECUADOR</a> </li>
<li><a class="links_interest" href="http://www.plantecuador.com/Spanish/spaset.html" target="_blank">Breeder Plantec Ecuador</a> </li>
<li><a class="links_interest" href="http://www.rosen-tantau.com/en/our-catalogues-for-professionals" target="_blank">Breeder Rosen Tantau</a> </li>
<li><a class="links_interest" href="http://www.hppexhibitions.com/floriculture/" target="_blank">HPP Floriculture Exhibitions</a> </li>
<li><a class="links_interest" href="http://www.sierraflowerfinder.com/en/" target="_blank">Flower finder</a> </li>
</ul>
</li>

</ul>

</div>





<div lang="es" class="contacto sp">
<H4 style="color:white;font-family:sans,arial;margin:10px;">ENLACES DE INTER&Eacute;S</H4>
<ul>
<li>
Conociendo Ecuador
<ul>
<li><a class="links_interest" href="https://es.wikipedia.org/wiki/Ecuador" target="_blank">Informaci&oacute;n general sobre Ecuador</a></li>
<li><a class="links_interest" href="https://ecuador.travel/es/" target="_blank">Ecuador tur&iacute;stico</a></li>
</ul>
</li>

<li>
Transporte A&eacute;reo
<ul>
<li><a class="links_interest" href="http://aeropuertoquito.aero/es/" target="_blank">Aeropuerto de Quito</a></li> 
<li><a class="links_interest" href="http://touch.track-trace.com/aircargo" target="_blank">Rastreo de vuelos de carga</a></li> 
</ul>
</li>

<li>
Sector Flor&iacute;cola
<ul>
<li><a class="links_interest" href="http://www.proecuador.gob.ec/pubs/analisis-sectorial-de-rosas-frescas/" target="_blank">An&aacute;lisis del sector de las rosas por PROECUADOR</a> </li>
<li><a class="links_interest" href="http://www.plantecuador.com/Spanish/spaset.html" target="_blank">Breeder Plantec Ecuador</a> </li>
<li><a class="links_interest" href="http://www.rosen-tantau.com/en/our-catalogues-for-professionals" target="_blank">Breeder Rosen Tantau</a> </li>
<li><a class="links_interest" href="http://www.hppexhibitions.com/floriculture/" target="_blank">Ferias de Floricultura de HPP</a> </li>
<li><a class="links_interest" href="http://www.sierraflowerfinder.com/en/" target="_blank">Listado de flores y variedades del mercado</a> </li>
</ul>
</li>

</ul>

</div>
<label type="hidden" id="my_state" style="z-index: 0;"></label>


<div id="quito" lang="es">Quito - Ecuador</div>
<div id="info">Munanaflowers S.A.<br> &#9400; 2017</div>



</div>

<div id="id01" class="w3-modal" style="z-index: 20;">
</div>

<div id="id02" class="w3-modal" style="z-index: 20;">
</div>

<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
<script src="cods/tools.js"></script>

</body>
</html>
