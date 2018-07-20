

		function fentra(usuario, password){

			var u=usuario;

			var p=password;

			$.post("php/paseEntrada.php",{usuario: u, password: p},function(res){
                   
                if (res==1){

                	localStorage.setItem('usuarioBDCCOO',u);

					window.location.href = "html/panelControl.html";


				}
				else{
					alert("No existe usuario o contraseña incorrecta");
				}


                return res;
            });

                     

		}



		$(document).ready(function(){

			
			$(window).bind('keydown', function(e) {            
  				if (e.charCode == 13 || e.keyCode == 13) {//ENTER
   					 fentra($("#usuario").val(), $("#password").val());
  				}    
			});





			$("#entrar").click(function(){

				fentra($("#usuario").val(), $("#password").val());
							
			});

			


			
			
		});
	