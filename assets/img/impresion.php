
<?php
$titleseo="Diagnostico";
include_once("./config/parameters.php"); 

include_once("./layouts/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    .tarjeta-servicio .card-img-top {
    margin-top:10px;
    box-sizing: border-box;
    width: 100%; /* Ancho deseado */
    height: 30vh; /* Altura automática para mantener la proporción */
    border-radius:15px;    
}   

.video-pequeno {
    width: 100%; /* Puedes ajustar este valor según el tamaño deseado */
    max-width: 300px; /* Establece un ancho máximo para evitar que el video se estire demasiado */
    height: 25vh; /* Para mantener la proporción del video */
}

    </style>
<article class="container mt-5">
                <div class="row">
                     <div class=" margin2  col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                    <div class="col-12 tarjeta-servicio">
                      <a href="radiografias-extraorales"><img class="card-img-top" src="./assets/img/impresion/img1.jpeg"  alt="Card image cap"></a>
                        <div class="card-body">
                           <a href="radiografias-extraorales"> <h5>Radiografias Extraorales</h5></a>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                    
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                      <div class="col-12 tarjeta-servicio">
                      <a href="tomografia"><img class="card-img-top" src="./assets/img/impresion/img2.jpeg" alt="Card image cap"></a>
                        <div class="card-body">
                          <a href="tomografia">
                          <h5>Tomografia Dental 3D</h5>
                          </a>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                   
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                    <div class="col-12 tarjeta-servicio">
                      <a href="radiografias-intraorales"><img class="card-img-top" src="./assets/img/impresion/img3.jpeg" alt="Card image cap"></a>
                        <div class="card-body">
                      <a href="radiografias-intraorales">
                      <h5>Radiografia Intraorales</h5>
                      </a>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                                        
                </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                <div class="col-12 tarjeta-servicio">
                    <a href="radiografias-intraorales">
                        <div class="video-container">
                            <video class="video-pequeno" controls loop autoplay muted src="./assets/img/impresion/video1.mp4">
                                <!-- Este tag de pista especifica un archivo de subtítulos para el video. Incluye varios atributos, como src, default, kind, srclang, y label. -->
                                <track src="captions.vtt" default kind="captions" srclang="es" label="Español (Latinoamérica)">
                                <!-- Este texto se muestra si el navegador web del usuario no admite el tag de video -->
                                Tu navegador no soporta video
                            </video>
                        </div>
                    </a>
                    <div class="card-body">
                        <a href="radiografias-intraorales">
                            <h5>Radiografía Intraorales</h5>
                        </a>
                        <p class="card-text"></p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                <div class="col-12 tarjeta-servicio">
                    <a href="radiografias-intraorales">
                        <div class="video-container">
                            <video class="video-pequeno" controls loop autoplay muted src="./assets/img/impresion/video2.mp4">
                                <!-- Este tag de pista especifica un archivo de subtítulos para el video. Incluye varios atributos, como src, default, kind, srclang, y label. -->
                                <track src="captions.vtt" default kind="captions" srclang="es" label="Español (Latinoamérica)">
                                <!-- Este texto se muestra si el navegador web del usuario no admite el tag de video -->
                                Tu navegador no soporta video
                            </video>
                        </div>
                    </a>
                    <div class="card-body">
                        <a href="radiografias-intraorales">
                            <h5>Radiografía Intraorales</h5>
                        </a>
                        <p class="card-text"></p>
                    </div> 
                </div>
            </div>

        </div>
         </article>



<?php include_once("./layouts/footer.php"); ?>