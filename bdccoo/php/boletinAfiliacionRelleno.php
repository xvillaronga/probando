
<?php

include("conexion.php");



$id = $_POST['usuario'];




    


    $result = $conexion->query("select *  FROM censo WHERE id='".$id."'");

    while($row = $result->fetch_array())
                            {
                                
                           
                                    
                                           $NIF=$row['NIF'] ;
                                           $nombre=$row['Nombre'] ;
                                           $apellidos=$row['Apellidos'] ;

                                           $fechaNacimiento=$row['FechaNacimiento'] ;
                                                $originalDate = $fechaNacimiento;
                                                $newFechaNacimiento = date("d/m/Y", strtotime($originalDate));

                                           $numeroOficina=$row['NumeroOficina'] ;
                                           $nombreOficina=$row['NombreOficina'] ;
                                           $categoriaProfesional=$row['CategoriaProfesional'] ;
                                           $puesto=$row['Puesto'] ;

                                           $primeraAlta=$row['PrimeraAlta'] ;
                                                $originalDate = $primeraAlta;
                                                $newPrimeraAlta = date("d/m/Y", strtotime($originalDate));

                                           $sociedad=$row['Sociedad'] ;
                           
                            }


    
    echo "

    
  

    <style>

        body{

            font-family: Arial, Helvetica, sans-serif;
            
            
        }

        label{
            padding: 3px;
            font-size: 20px;

        }

        input{
            padding: 2px;
            font-size: 20px;
            border: 1px solid Black;

        }
        h1{
            text-align: center;
            color: MidnightBlue;
            font-size: 45px;
        }

        h2{
            text-align: center;
            color: Brown;
            font-size: 35px;
        }

        #cabecera{

            

        }

        #arriba{

            border: 2px solid Brown ;
            padding: 7px;

        }

        #medio{

            border: 2px solid Brown ;
            padding: 7px;
        }

        #bajo{

            border: 2px solid Brown ;
            padding: 7px;
        }

        #notaLegal{

            text-align: center;
            padding: 7px;
            font-size: 11px;
            display: inline-block;
        }

        

        .cuadradito{

            width:30px;
           
        }

        .clave{

            width:90px;
        }

        #nombre{

            width:660px;
        }

        #domicilio{

            width:780px;
        }

        #poblacion{

            width:270px;
        }

        #empresa{

            width:330px;
        }

        #centroTrabajo{

             width:490px;
        }

        #clasificacion{

            width:580px;
        }

        #forma{

            text-align: center;
            color:Brown;

        }

        .particular{

            width:300px;
        }

        #deseas{

            text-align: center;
        }



        
        #footIzquierda {float: left;  width:450px;height: 150px; }
        #footCentro {float: left;height: 150px;height: 50px;}
        #footDerecha {float: left;  width:400px;height: 150px;border: 2px solid Brown }

       

    </style>

    <div class='container'>

                <div class='row' id='logo' >

                        <img class='img-fluid' src='../img/logoccooBoletin.png' alt='logo'>

                </div>
        
           
                <div class='row' id='cabecera' >

                        <h1>BOLETÍN AFILIACIÓN</h1>

                </div>
            
                

                <div class='row' id='arriba'>

                    <div class='row'>
                            <label>APELLIDOS Y NOMBRE : </label>  <input type='text' id='nombre' placeholder=' ".$apellidos.", ".$nombre."'/> 
                    </div>

                    <br>

                    <div class='row'>
                            <label>DOMICILIO :</label> <input type='text' id='domicilio' placeholder=''/> 
                    </div>

                    <br>

                    <div class='row'>
                            <label>POBLACION :</label> <input id='poblacion' type='text' placeholder=''/> 
                            <label>PROVINCIA :</label> <input type='text' placeholder=''/> 
                            <label>CP :</label> <input type='text' class='clave' placeholder=''/> 
                    </div>

                    <br>

                    <div class='row'>
                            <label>DNI :</label> <input type='text' placeholder=' ".$NIF."'/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>FECHA NACIMIENTO :</label> <input type='text' placeholder=' ".$newFechaNacimiento."'/>
                    </div>

                    <br>

                    <div class='row'>
                            <label>EMPRESA :</label> <input type='text' id='empresa' placeholder='".$sociedad."'/> 
                            <label>CIF :</label> <input type='text' placeholder=''/> 
                            <label>CLAVE :</label> <input type='text' class='clave' placeholder=''/> 
                    </div> 

                    <br>

                    <div class='row'>
                            <label>CENTRO DE TRABAJO :</label> <input type='text'  id='centroTrabajo' placeholder=' ".$numeroOficina." - ".$nombreOficina."'/> 
                            <label>CLAVE :</label> <input type='text' class='clave' placeholder=''/> 
                    </div>

                    <br>

                    <div class='row'>
                            <label>CLASIFICACION PROFESIONAL :</label> <input type='text' id='clasificacion' placeholder=' ".$categoriaProfesional." , ".$puesto."'/> 
                    </div>

                    <br>

                    <div class='row'>
                            <label>FECHA ANTIGUEDAD :</label> <input type='text' placeholder=' ".$newPrimeraAlta."'/> 
                            <label>FECHA AFILIACION :</label> <input type='text' placeholder=''/> 
                    </div>                            
               </div>

               <br>   

               <div class='row' id='medio'>
                    <h4 id='forma'> FORMA DE PAGO </h4>

                    <div class='row'>
                        <label>DESCUENTO EN NOMINA</label> <input type='text' class='cuadradito' placeholder=' '/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>DOMICILIACION BANCARIA</label> <input type='text' class='cuadradito' placeholder=' '/>
                    </div>

                    <br>

                    <div class='row'>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>TRIMESTRAL</label> <input type='text' class='cuadradito' placeholder=' '/>
                        <label>SEMESTRAL</label> <input type='text' class='cuadradito' placeholder=' '/>
                        <label>ANUAL</label> <input type='text' class='cuadradito' placeholder=' '/>
                    </div>

                    <br>

                    <div class='row'>
                        <label>IBAN :</label> 
                        <input type='text' class='cuadradito' placeholder='E'/>
                        <input type='text' class='cuadradito' placeholder='S'/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        <input type='text' class='cuadradito' placeholder=' '/>
                        
                    </div>


               </div>  

               <br>

               <div class='row' id='bajo'> 

                    <div class='row'>
                        <label>T.MOVIL PART.</label> <input type='text' class='particular'  placeholder=' '/>
                        <label>E-MAIL PART.</label> <input type='text' class='particular'  placeholder=' '/>
                    </div>

                    <br>

                    <div class='row'>
                        <p id='deseas'>¿DESEAS RECIBIR INFORMACION EN TU CORREO ELECTRONICO PARTICULAR O EN TU MOVIL?</p> 
                    </div>

                    <br>

                    <div class='row'>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>SI</label> <input type='text' class='cuadradito' placeholder=' '/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>NO</label> <input type='text' class='cuadradito' placeholder=' '/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>CORREO</label> <input type='text' class='cuadradito' placeholder=' '/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>MOVIL</label> <input type='text' class='cuadradito' placeholder=' '/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>AMBOS</label> <input type='text' class='cuadradito' placeholder=' '/>
                    </div>
               

               </div> 

               

               <div class='row'> 

                    <br>
                        <div id='footIzquierda'>
                            <h2>#SiempreCCOOntigo</h2>
                        </div>
                        
                        <div id='footCentro'>
                            <label>FIRMA</label>
                        </div>

                        <div id='footDerecha'>
                            
                        </div>

               </div> 

               <br>

               <div class='row' id='notaLegal'> 

                        <p> 
                            De conformidad con la Ley Orgánica de Protección de Datos de carácter personal, se le informa que sus datos personales serán incorporados a un fichero titularidad de CC.OO. La finalidad del tratamiento de sus datos por parte de esta Organización la constituye el mantenimiento de su relación como afiliado. Puede ejercitar sus derechos de acceso, rectificación, cancelación y, en su caso, oposición, enviando una solicitud por escrito acompañada de fotocopia de DNI dirigida a: CC.OO. Fed. de Servicios, Ramírez de Arellano , 19, 28043 Madrid. 
                        </p>

               </div>                                                         
                             
                                            
                            
         
    </div>

     ";
                    

                    
                               
                    

                
        
    
        



/****************************************************/
    mysqli_close($conexion);



?>