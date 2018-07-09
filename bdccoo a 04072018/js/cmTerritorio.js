$(document).ready(function(){

	/*******OCULTAR RESTO DE PANELES*******/	
	$("#cmTerritorio").click(function(){
		 $("#buscarEmpleado").hide();
         $("#buscarOficina").hide(); 
         $("#resultadoEmpleado").hide();
         $("#resultadoOficina").hide();
         $("#resultadoAccionSindical").hide();
         $("#resultadoOrganizacion").hide();
         $("#resultadoCuadrosAnaliticos").hide();
         $("#notaGastos").hide();

    /********************************************/
    	$("#resultadoCMTerritorio").slideDown(1000);
      });	


    $.post("../php/afiliadosPorCoordinador.php",function(res){
                   
            $("#afiliadosPorCoordinador").html(res);

            
    });

    $.post("../php/oficinasPorCoordinador.php",function(res){
                   
            $("#oficinasPorCoordinador").html(res);

            
    });

    $.post("../php/censoPorFiguras.php",function(res){
                   
            $("#censoPorFiguras").html(res);

            
    });

  	
});