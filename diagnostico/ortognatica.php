
<?php
$titleseo="Diagnostico";
include_once("../config/parameters.php"); 

include_once("../layouts/header.php");
?>
<link rel="stylesheet" href="index.css">
<style>
.tarjeta-servicio {
    /* Estilos para las tarjetas de servicio */
    background-color: #fff; /* Color de fondo */
    border-radius: 10px; /* Radio de borde para suavizar las esquinas */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
    padding: 20px; /* Espaciado interno */
    text-align: center; /* Alinear el contenido al centro */
}
.card-img-top {
    /* Estilos para las imágenes de las tarjetas */
    width: 100%; /* Ancho máximo */
    height: auto; /* Altura automática para mantener la proporción */
    object-fit: cover; /* Ajustar la imagen manteniendo su relación de aspecto y cubriendo el contenedor */
}

.video-container {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* Proporción 16:9 */
}

.video-pequeno {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Enlaza tu archivo CSS aquí -->
</head>
<body>
<a href="https://cedidentserver.com/"><span id="texto_login">RESULTADOS EN LÍNEA</span></a>
<article class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
            <div class="col-12 tarjeta-servicio">
                    <img class="card-img-top" src="../assets/img/ortognatica/img1.jpeg" alt="Radiografías Extraorales">
                <div class="card-body">
                        <h5>Planificaciòn quirúrgica 3D</h5>
                    <p class="card-text"></p>
                </div> 
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
            <div class="col-12 tarjeta-servicio">
                    <br>
                <img class="card-img-top" src="../assets/img/ortognatica/img2.jpeg" alt="Tomografia Dental 3D">
                <div class="card-body">
                        <h5>Planificaciòn quirúrgica 3D</h5>
                    <p class="card-text"></p>
                </div> 
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
            <div class="col-12 tarjeta-servicio">
                    <img class="card-img-top" src="../assets/img/ortognatica/img3.jpeg" alt="Radiografías Intraorales">
                <div class="card-body">
                        <h5>Planificaciòn quirúrgica 3D</h5>
                    <p class="card-text"></p>
                </div> 
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
            <div class="col-12 tarjeta-servicio">
                    <img class="card-img-top" src="../assets/img/ortognatica/img5.jpeg" alt="Radiografías Extraorales">
                <div class="card-body">
                        <h5>Planificaciòn quirúrgica 3D</h5>
                    <p class="card-text"></p>
                </div> 
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
            <div class="col-12 tarjeta-servicio">
                    <img class="card-img-top" src="../assets/img/ortognatica/img6.jpeg" alt="Tomografia Dental 3D">
                <div class="card-body">
                        <h5>Planificaciòn quirúrgica 3D</h5>
                    <p class="card-text"></p>
                </div> 
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 mb-5">
            <div class="col-12 tarjeta-servicio">
                    <div class="video-container">
                        <video class="video-pequeno" controls loop autoplay muted src="../assets/img/ortognatica/video1.mp4">
                            <track src="captions.vtt" default kind="captions" srclang="es" label="Español (Latinoamérica)">
                            Tu navegador no soporta video
                        </video>
                    </div>
                <div class="card-body">
                        <h5>Planificaciòn quirúrgica 3D</h5>
                    <p class="card-text"></p>
                </div> 
            </div>
        </div>

        <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 mb-5">
            <div class="col-12 tarjeta-servicio">
                    <div class="video-container">
                        <video class="video-pequeno" controls loop autoplay muted src="../assets/img/ortognatica/video2.mp4">
                            <track src="captions.vtt" default kind="captions" srclang="es" label="Español (Latinoamérica)">
                            Tu navegador no soporta video
                        </video>
                    </div>
                <div class="card-body">
                        <h5>Planificaciòn quirúrgica 3D</h5>
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