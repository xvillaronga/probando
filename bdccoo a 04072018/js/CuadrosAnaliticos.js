$(document).ready(function(){

		
  $(".loader").hide();

	$("#CuadrosAnaliticos").click(function(){
  /*******OCULTAR RESTO DE PANELES*******/
		     $("#buscarEmpleado").hide();
         $("#buscarOficina").hide(); 
         $("#resultadoEmpleado").hide();
         $("#resultadoOficina").hide();
         $("#notaGastos").hide();
         $("#resultadoCMTerritorio").hide();
         $("#tablaAfiliacion").hide();
         $("#resultadoAccionSindical").hide();
         $("#resultadoOrganizacion").hide();


          
  /********************************************/
         $("#resultadoCuadrosAnaliticos").slideDown(1000);

         //$("#resorteTablaAfiliacion").slideDown(1000);

  
    	
  });	

   

  $.post("../php/cuadrosAnaliticos.php",function(res){
                   
            $("#cuadrosAna").html(res);

            
  });

  $("#botonFiltroProvincia").click(function(){ 

         $(".loader").delay(1000).show(); 

         $(".loader").fadeOut("slow");

         var sitio= $("#localidad").val().toUpperCase();

         if ( sitio == 'TODAS'){


              $.post("../php/cuadrosAnaliticos.php",function(res){
                   
                  $("#cuadrosAna").html(res);
              });

          }
          else{

             //$("#cuadrosAna").html('<h1>TONTO</h1>');

             /* FALTA CREAR EL PHP cuadrosAnaliticosFiltrados.php*/

                $.post("../php/cuadrosAnaliticosFiltrados.php",{lugar: sitio},function(res){
                       
                    $("#cuadrosAna").html(res);

                });

              
             

          }

        

         /*
    
        var filtroProvincia = $("#filtroProvincia").val().toUpperCase();

        

        alert("Va a filtrar por la provincia de "+filtroProvincia);

        for (var n=1;n<6000;n++){

                  //alert($("td").eq(n).html().val());

                  if (($("td").eq(n).html())== filtroProvincia){

                              

                     //$("td").eq(n).html("ALMERIAS");

                     $("td").eq(n).parent().show();

                  }

                  else{

                    $("td").eq(n).parent().hide();
                  }
                 
        }

        */
        
       
  }); 

  

  	
});