
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
    margin-top:14px;
    margin-left:12px;
    box-sizing: border-box;
    width: 90%; /* Ancho deseado */
    height: 28vh; /* Altura automática para mantener la proporción */
}   

.video-pequeno {
    margin-top:14px;
    width: 100%; /* Puedes ajustar este valor según el tamaño deseado */
    max-width: 300px; /* Establece un ancho máximo para evitar que el video se estire demasiado */
    height: auto; /* Para mantener la proporción del video */
}

</style>
<a href="https://cedidentserver.com/"><span id="texto_login">RESULTADOS EN LÍNEA</span></a>
<article class="container mt-5">

                <div class="row">
                    
            <div class=" margin2  col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                <div class="col-12 tarjeta-servicio">
                        <div class="video-container">
                            <video class="video-pequeno" controls loop autoplay muted src="../assets/img/implantes/planificacion.mp4">
                                <track src="captions.vtt" default kind="captions" srclang="es" label="Español (Latinoamérica)">
                                Tu navegador no soporta video
                            </video>
                        </div>
                    <div class="card-body">
                        <h5 style="text-align:center;">Planificaciòn </h5>
                        <p class="card-text"></p>
                    </div> 
                </div>
            </div>
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                      <div class="col-12 tarjeta-servicio">
                        <img class="card-img-top" src="../assets/img/implantes/implante2.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 style="text-align:center;">Planificaciòn</h5>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                   
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                    <div class="col-12 tarjeta-servicio">
                        <img class="card-img-top" src="../assets/img/implantes/implante3.jpeg" alt="Card image cap">
                        <div class="card-body">
                      <h5 style="text-align:center;">Guía quirúrgica</h5>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                <div class="margin2 col-lg-8 col-md-4 col-sm-6 col-xs-12 mb-5" style="margin-top: 30px; margin-bottom: 30px;">
                    <div class="col-12 tarjeta" style="height: 500px;"> 
                            <img class="card-img-top" src="../assets/img/implantes/implante1.jpeg" style="height: 450px;" alt="Card image cap"> 
                        <div class="card-body" style="height: 100px;"> 
                                <h5 style="text-align:center;">Planificación</h5>
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
</body>
</html>


<?php include_once("../layouts/footer.php"); ?>