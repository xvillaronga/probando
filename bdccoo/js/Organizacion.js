$(document).ready(function(){

  $(".loader").hide();

		
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

    
   $.post("../php/creditoHorario.php",function(res){
                   
            $("#creditoHorario").html(res);

            
  }); 

/**********LISTADO DELEGADOS FILTRO*****/

  $("#botonFiltroDelegados").click(function(){ 

         $(".loader").delay(1000).show(); 

         $(".loader").fadeOut("slow");

         var sitio= $("#localidadDelegados").val().toUpperCase();

         
                $.post("../php/delegadosFiltrados.php",{lugar: sitio},function(res){
                       
                    $("#listadoDelegados").html(res);

                });

           
  }); 

  




    // *******ESTRUCTURA SINDICAL****//

    Highcharts.chart('estructuraSindical', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                colors: [
                   '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655'
                    ],
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Representatividad',
            colorByPoint: true,
            data: [{
                name: 'CC.OO.',
                y: 61.41,
                sliced: true,
                selected: true
            }, {
                name: 'UGT',
                y: 11.84
            }, {
                name: 'CSIF',
                y: 10.85
            }, {
                name: 'CGT',
                y: 4.67
            }, {
                name: 'USOC',
                y: 4.18
            }, {
                name: 'Otros',
                y: 1.64
            }]
        }]
    });

   // ******* FIN ESTRUCTURA SINDICAL****//

  	
});