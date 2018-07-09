$(document).ready(function(){

		
	$("#AccionSindical").click(function(){
  /*******OCULTAR RESTO DE PANELES*******/
		     $("#buscarEmpleado").hide();
         $("#buscarOficina").hide(); 
         $("#resultadoEmpleado").hide();
         $("#resultadoOficina").hide();
         $("#notaGastos").hide();
         $("#resultadoCMTerritorio").hide();
         $("#resultadoOrganizacion").hide();
         $("#tablaAfiliacion").hide();
         $("#resultadoCuadrosAnaliticos").hide();
  /********************************************/
         $("#resultadoAccionSindical").slideDown(1000);

         //$("#resorteTablaAfiliacion").slideDown(1000);

  
    	
  });	

   

  $.post("../php/tablaAfiliacion.php",function(res){
                   
            $("#tablaAfiliacion").html(res);

            
  });

  $.post("../php/afiliadosFueraCenso.php",function(res){
                   
            $("#afiliadosFueraCenso").html(res);

            
  });

  $.post("../php/rankingAnual.php",function(res){
                   
            $("#rankingAnual").html(res);

            
  });
    


  	
});