
<?php
$titleseo="Diagnostico";
include_once("../config/parameters.php"); 

include_once("../layouts/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<style>
    .tarjeta-servicio .card-img-top {
        margin-top: 10px;
        box-sizing: border-box;
        width: 100%; /* Ancho máximo */
        height: auto; /* Altura automática para mantener la proporción */
        max-height: 300px; /* Altura máxima deseada */
    }
</style>
<a href="https://cedidentserver.com/"><span id="texto_login">RESULTADOS EN LÍNEA</span></a>
<article class="container mt-5">
                <div class="row">
                     <div class=" margin2  col-lg-6 col-md-4 col-sm-6 col-xs-12 mb-5">
                    <div class="col-12 tarjeta-servicio">
                        <img class="card-img-top" src="../assets/img/invisibles/invisible1.jpeg"  alt="Card image cap">
                        <div class="card-body">
                            <h5 style="text-align:center;">Diseño </h5>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                    
                    <div class=" col-lg-6 col-md-4 col-sm-6 col-xs-12 mb-5">
                      <div class="col-12 tarjeta-servicio">
                        <img class="card-img-top" src="../assets/img/invisibles/invisible3.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 style="text-align:center;">Diseño</h5>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class=" col-lg-5 col-md-4 col-sm-6 col-xs-12 mb-5">
                        <div class="col-12 tarjeta-servicio">
                           <img class="card-img-top" src="../assets/img/invisibles/invisible2.jpeg" alt="Card image cap">
                        <div class="card-body">
                           <h5 style="text-align:center;">Alineador Invisible</h5>
                             <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                </div>
         </article>

 <div class="mt-5 seccion_more_info py-5">
        <div class="container">
                    <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <i class="fli flaticon-group text-center d-block"></i>
                <h3 class="text-center">SI TIENE ALGUNA DUDA SOBRE ALGÚN SERVICIO</h3>
                <div class="boton d-block text-center">
                    <a href="../contacto" class="">Contáctenos</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <i class="fli flaticon-high-five text-center d-block"></i>
                <h3 class="text-center">ÚNETE A NUESTRA RED DE ODONTÓLOGOS</h3>
                <div class="boton d-block text-center">
                    <a href="../afiliar" class="">Afiliarme</a>
                </div>
            </div>
        </div>
        </div>
    </div>

<?php include_once("../layouts/footer.php"); ?>