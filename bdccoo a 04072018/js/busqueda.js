$(document).ready(function(){	

		var idEmpleado;

		$("#service").val("");
		$("#service2").val("");

		/**********CLICK BUSCAR EMPLEADO******/

		$("#menuBuscarEmpleado").click(function(){

			/*******OCULTAR RESTO DE PANELES*******/	
			
			$("#resultadoCMTerritorio").hide();
			$("#resultadoAccionSindical").hide();
			$("#resultadoOrganizacion").hide();
			$("#resultadoCuadrosAnaliticos").hide();
         	$("#buscarOficina").hide(); 
         	$("#resultadoEmpleado").hide();
        	$("#resultadoOficina").hide();
        	$("#notaGastos").hide();

    		/********************************************/


			
			$("#buscarEmpleado").slideDown(1000);
		});

		$( "#service" ).focus(function() {
  			$("#service").val("");
		});

		/******FIN CLICK BUSCAR EMPLEADO******/


		/*****************AUTOCOMPLETA EMPLEADO**************************************/

		$('#service').on('input',function(){

		

			var service = $(this).val();		

			var dataString = 'service='+service;

				
			$.ajax({

	            type: "POST",

	            url: "../php/autocompletaEmpleado.php",

	            data: dataString,

	            success: function(data) {

					//Escribimos las sugerencias que nos manda la consulta

					$('#suggestionsEmpleado').fadeIn(1000).html(data);

					//Al hacer click en alguna de las sugerencias

					$('.suggest-element').on('click', function(){

						
						idEmpleado = $(this).attr('id');

						var apellidoNombre = $(this).children('a').attr('id');

						$('#service').val(apellidoNombre);

						//Hacemos desaparecer el resto de sugerencias

						$('#suggestionsEmpleado').fadeOut(1000);
						
						
						return false;

					});              

	            }

	        });

         });     

         /******** FIN AUTOCOMPLETA EMPLEADO*********************/     

         /************* BUSQUEDA EMPLEADO **************/

         $("#busquedaEmpleado").click(function(){

         	/********efecto procesando******************/
         	$(".loader").delay(1000).show(); 

         	$(".loader").fadeOut("slow");
         	/*********fin efecto procesando*****************/

         	if ($('#service').val()!=""){

         		$("#resultadoEmpleado").slideDown(1000);

         		

				if (idEmpleado!=null){

					$.post("../php/volcarDatosEmpleado.php",{usuario: idEmpleado},function(res){
		              
		           
				               $("#resultadoEmpleado").html(res); 

				               

				               	$("#imprimirBA").click(function(){

				               			$.post("../php/boletinAfiliacionRelleno.php",{usuario: idEmpleado},function(res){
		              
		           
				               					$("#boletin").html(res); 
				               					$("#boletin").hide();
				               					
				               					imprSelec('boletin');

				               					function imprSelec(nombre) {
												  var ficha = document.getElementById(nombre);
												  var ventimp = window.open(' ', 'popimpr');

												  ventimp.document.write( ficha.innerHTML );
												  ventimp.document.close();
												  ventimp.print( );
												  ventimp.close();

												/*  	
												var meta = ventimp.document.createElement("meta");
													meta.setAttribute("name", "viewport");
													meta.setAttribute("content", "width=device-width, initial-scale=1, shrink-to-fit=no");
													ventimp.document.head.appendChild(meta);


												var css = ventimp.document.createElement("link");
													css.setAttribute("href", "../css/bootstrap.min.css");
													css.setAttribute("rel", "stylesheet");
													css.setAttribute("type", "text/css");
													//css.setAttribute("media", "screen");
													css.setAttribute("media", "print");
													ventimp.document.head.appendChild(css);

												var script = ventimp.document.createElement("script");
													script.setAttribute("src", "../js/jquery/jquery-3.3.1.min.js");
													ventimp.document.head.appendChild(script);

												var script2 = ventimp.document.createElement("script");
													script2.setAttribute("src", "../js/bootstrap/popper.min.js");
													ventimp.document.head.appendChild(script2);

												var script3 = ventimp.document.createElement("script");
													script3.setAttribute("src", "../js/bootstrap/bootstrap.min.js");
													ventimp.document.head.appendChild(script3);
												*/


												}
												
												
				   
		           						});

				               	});
				               	
				   
		            });

		         

					

				}
         	}



			
		});

        /******** FIN BUSQUEDA EMPLEADO*********************/

/**************************************************************************************************************************/


		/******CLICK BUSCAR OFICINA***********/

		$("#menuBuscarOficina").click(function(){

			/*******OCULTAR RESTO DE PANELES*******/	
			
			$("#resultadoCMTerritorio").hide();
			$("#resultadoAccionSindical").hide();
			$("#resultadoCuadrosAnaliticos").hide();
         	$("#buscarEmpleado").hide(); 
         	$("#resultadoEmpleado").hide();
        	$("#resultadoOficina").hide();
        	$("#notaGastos").hide();
    		/********************************************/

			

			$("#buscarOficina").slideDown(1000);

			
		});

		$( "#service2" ).focus(function() {
  			$("#service2").val("");
		});

		
		/*****FIN CLICK BUSCAR OFICINA******/

/*****************AUTOCOMPLETA OFICINA**************************************/

		$('#service2').on('input',function(){

		

			var service2 = $(this).val();		

			var dataString = 'service2='+service2;

				
			$.ajax({

	            type: "POST",

	            url: "../php/autocompletaOficina.php",

	            data: dataString,

	            success: function(data) {

					//Escribimos las sugerencias que nos manda la consulta

					$('#suggestionsOficina').fadeIn(1000).html(data);

					//Al hacer click en alguna de las sugerencias

					$('.suggest-element').on('click', function(){

						
						idOficina = $(this).attr('id');

						var NumeroOficinaNombre = $(this).children('a').attr('id');

						$('#service2').val(NumeroOficinaNombre);

						//Hacemos desaparecer el resto de sugerencias

						$('#suggestionsOficina').fadeOut(1000);
						
						
						return false;

					});              

	            }

	        });

         });     

         /******** FIN AUTOCOMPLETA OFICINA*********************/ 

         /************* BUSQUEDA OFICINA **************/

         $("#busquedaOficina").click(function(){

         	/********efecto procesando******************/
         	$(".loader").delay(1000).show(); 

         	$(".loader").fadeOut("slow");
         	/********* fin efecto procesando*****************/

         	if ($('#service2').val()!=""){

         		$("#resultadoOficina").slideDown(1000);

				if (idOficina!=null){

					$.post("../php/volcarDatosOficina.php",{ofi: idOficina},function(res){
		               
		               $("#resultadoOficina").html(res); 


		            });
				}
         	}
			
			
		});

        /******** FIN BUSQUEDA OFICINA*********************/

});