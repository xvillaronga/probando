$(document).ready(function(){

		
	$("#Organizacion").click(function(){
  /*******OCULTAR RESTO DE PANELES*******/
		     $("#buscarEmpleado").hide();
         $("#buscarOficina").hide(); 
         $("#resultadoEmpleado").hide();
         $("#resultadoOficina").hide();
         $("#notaGastos").hide();
         $("#resultadoCMTerritorio").hide();
         $("#resultadoAccionSindical").hide();
         $("#tablaAfiliacion").hide();
         $("#resultadoCuadrosAnaliticos").hide();
  /********************************************/
         $("#resultadoOrganizacion").slideDown(1000);

         //$("#resorteTablaAfiliacion").slideDown(1000);

  
    	
  });	

   $.post("../php/delegadosProvincias.php",function(res){
                   
            $("#delegadosProvincias").html(res);

            
  }); 

    


  	
});