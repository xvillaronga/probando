$(document).ready(function(){

	/*******OCULTAR RESTO DE PANELES*******/	
	$("#crearNotaGastos").click(function(){
		     $("#buscarEmpleado").hide();
         $("#buscarOficina").hide(); 
         $("#resultadoEmpleado").hide();
         $("#resultadoOficina").hide();
         $("#resultadoCMTerritorio").hide();
         $("#resultadoAccionSindical").hide();
         $("#resultadoOrganizacion").hide();
         $("#resultadoCuadrosAnaliticos").hide();

    /********************************************/
    	$("#notaGastos").slideDown(1000);

     
  	});	


  	
});