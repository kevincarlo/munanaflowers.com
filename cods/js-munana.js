$(function(){
	$(".sp").hide();
	$(".en").show();
	


//---Galeria------------------------------
	$("#ventana").hide();
	$("#transparente").hide();
	$("#nombre").hide();

//	$(".th").attr("width","200");
//	$(".th").attr("height","113");

	var load_thmbs = function(arg_url, container)
	{
		var jqxhr = $.ajax({
			url: arg_url
		});
	
		jqxhr.done(function(data){
		
			for(var i=0;i<data.elements;i++)
			{
				var id = data.variedades[i].image ;
				$('<div class="elemento">'+
					'<div class="thumb"><img class="th" id="'+id.split("/")[2]+
					'" src="'+data.variedades[i].thumbnail+
					'" alt="'+data.variedades[i].variedad +' - '+ data.variedades[i].tipo_flor+'"></div>'+
					'<div class="name">'+data.variedades[i].variedad+'</div>'+
					'</div>'
				).appendTo($(container))
			}	
		
			$(".th").on("click",function(){
				imagen = ($(this).attr("id"));
				nombre = ($(this).attr("alt"));
				$("#hotspot").remove();
				$("<img id='hotspot' src=imgs/galeria/"+imagen+">").appendTo($("#ventana"));
				$("<div id='nombre'>"+nombre+"</div>").appendTo($("#ventana"));
				$("#hotspot").css({"z-index":"4","position":"absolute","top":"0px","left":"0px"});
				$("#ventana").fadeIn();
				$("#transparente").fadeIn();
				$("#nombre").fadeIn();
			});
		
			$(".th").on("mouseenter",function(){$("body").css("cursor","crosshair")});
			$(".th").on("mouseleave",function(){$("body").css("cursor","default")});
		});		
	}
	
	load_thmbs("services/prods.php?elements=30&note=new&flower=Rose","#gal-1");
	load_thmbs("services/prods.php?elements=30&flower=Gypsophila","#gal-2");
	load_thmbs("services/prods.php?elements=30&flower=Ornitoghalum","#gal-3");
	load_thmbs("services/prods.php?elements=30&flower=Craspedias","#gal-3");
	load_thmbs("services/prods.php?elements=30&flower=Solidago","#gal-3");	
	load_thmbs("services/prods.php?elements=30&flower=Lilium","#gal-3");		
	load_thmbs("services/prods.php?elements=30&flower=Scabiosa","#gal-3");		
	load_thmbs("services/prods.php?elements=30&flower=Veronicas","#gal-3");	
	load_thmbs("services/prods.php?elements=30&flower=Limonium","#gal-3");				
	
	recuperar = function(){
		$("#ventana").empty();
		$("#ventana").fadeOut();
		$("#transparente").fadeOut();
		$("#nombre").fadeOut();
	};

	$("#ventana").click(function(){recuperar()});
	$("#transparente").click(function(){recuperar()});
	$("body").keypress(function(){recuperar()});

	$(".th").on("hover",
	function(){$("body").css("cursor","crosshair")},
	function(){$("body").css("cursor","default")}
	);


//---Menu-------------------------------


	$(".boton_menu").hover(
		function(){
			$(this).css({"border-bottom":"1px solid #f07070","background":"#ffeeee"});
		},
		function(){
			$(this).css({"border-bottom":"0px","background":"#ffffff"});
		}
	);
	
	$(".boton_menu").click(

		function(){
			var lugar;
			lugar = $(this).attr("alt");
			document.getElementById(lugar).scrollIntoView({
        			behavior: "smooth"
      			});
		}
	);	

//---Boton home--------------------


	$(".boton-home").hover(
		function(){$(this).css("bottom","47px")},
		function(){$(this).css("bottom","45px")}		
	);


	$(".boton-home").click(
		function(){
			var lugar;
			lugar = "home";
			document.getElementById(lugar).scrollIntoView({
        			behavior: "smooth"
      			});
		}
	);	
	
//----Boton lang--------------------------

	$("img.boton-lang").hover(
		function(){
			$(this).css({"width":"36px","height":"42px"});
			
		},
		function(){
			$(this).css({"width":"35px","height":"40px"});
		}
	);
	
	$("#boton-sp").click(function(){
		$(".en").hide();
		$(".sp").show()
	});

	$("#boton-en").click(function(){
		$(".sp").hide();
		$(".en").show()
	});

});



//Analytics--------------------------------------
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-90551782-1', 'auto');
ga('send', 'pageview');


  


