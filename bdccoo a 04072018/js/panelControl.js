$(document).ready(function(){

     $(".loader").hide();

	/*******INICIALIZACION PANELES OCULTOS*******/	

		 $("#buscarEmpleado").hide();
         $("#buscarOficina").hide(); 
         $("#resultadoEmpleado").hide();
         
         $("#resultadoOficina").hide();
         $("#resultadoCMTerritorio").hide();
         $("#resultadoAccionSindical").hide();
         $("#resultadoOrganizacion").hide();
         $("#resultadoCuadrosAnaliticos").hide();
         $("#notaGastos").hide();

    /********************************************/

    /********************SALUDO USUARIO*************/
			
		var valor = localStorage.getItem('usuarioBDCCOO');

		
		$.post("../php/buscarNombreUsuario.php",{usuario: valor},function(res){
                   
          	$("#saludoUsuario").text("Hola "+res+". Bienvenido/a.");

          	
		});	

	/***********************************************/

	

	
});	