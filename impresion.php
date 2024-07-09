
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
    width: 100%;
    height: 400px;
    object-fit: cover;
    image-rendering: auto;
}

.video-pequeno {
    margin-top:10px;
    width: 500px; /* Puedes ajustar este valor según el tamaño deseado */
    max-width: 300px; /* Establece un ancho máximo para evitar que el video se estire demasiado */
    height: 40vh; /* Para mantener la proporción del video */
}


@media (min-width: 1280px) {
    #texto_login {
    font-weight: bold;
    color: white;
    text-align:center;
    background-color: rgb(36,113,163);
    transform: rotate(270deg);
    position: absolute;
    top: 49vh;
    right: -14vh; 
    width: 32vh;
    padding:10px;
    z-index: 9999;
    white-space: nowrap;
  }
}

@media (min-width: 1024px )and (max-width: 1275px) {
  #texto_login {
    font-weight: bold;
    color: white;
    text-align:center;
    background-color: rgb(36,113,163);
    transform: rotate(270deg);
    position: absolute;
    top: 66vh;
    right: -17vh; 
    width: 42vh;
    padding:5px;
    z-index: 9999;
    white-space: nowrap;
  }
}


@media (min-width: 915px )and (max-width: 932px) {
  #texto_login {
    font-size:1.3rem;
    font-weight: bold;
    color: white;
    text-align:center;
    background-color: rgb(36,113,163);
    transform: rotate(270deg);
    position: absolute;
    top: 39vh;
    right: -28vh; 
    width:  68vh;
    padding:10px;
    z-index: 9999;
    white-space: nowrap;
  }
}
@media (min-width: 914px )and (max-width: 914px) {
  #texto_login {
    font-size:1rem;
    font-weight: bold;
    color: white;
    text-align:center;
    background-color: rgb(36,113,163);
    transform: rotate(270deg);
    position: absolute;
    top: 60vh;
    right: -25vh; 
    width:  59vh;
    padding:8px;
    z-index: 9999;
    white-space: nowrap;
  }
}
@media (min-width: 912px )and (max-width: 913px) {
  #texto_login {
    font-size:1.3rem;
    font-weight: bold;
    color: white;
    text-align:center;
    background-color: rgb(36,113,163);
    transform: rotate(270deg);
    position: absolute;
    top: 30vh;
    right: -12vh; 
    width:  28vh;
    padding:10px;
    z-index: 9999;
    white-space: nowrap;
  }
}

@media (min-width: 896px)and (max-width: 910px)  {
    #texto_login {
      font-size:1rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 45vh;
    right: -23vh; 
    width: 55vh;
    padding: 8px;
    z-index: 9999;
    white-space: nowrap;
    }
  }
  @media (min-width: 853px)and (max-width: 895px)  {
    #texto_login {
    font-weight: bold;
    color: white;
    text-align:center;
    background-color: rgb(36,113,163);
    transform: rotate(270deg);
    position: absolute;
    top: 40vh;
    right: -8vh; 
    width: 20vh;
    padding:10px;
    z-index: 9999;
    white-space: nowrap;
    }
  }

  @media (min-width: 841px)and (max-width: 852px)  {
    #texto_login {
      font-size:1rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 45vh;
    right: -22vh; 
    width: 55vh;
    padding: 8px;
    z-index: 9999;
    white-space: nowrap;
    }
  }

  @media (min-width: 820px)and (max-width: 840px)  {
    #texto_login {
      font-size:1.2rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 35vh;
    right: -10vh; 
    width: 24vh;
    padding: 8px;
    z-index: 9999;
    white-space: nowrap;
    }
  }

  @media (min-width: 768px)and (max-width: 818px)  {
    #texto_login {
      font-size:1.1rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 40vh;
    right: -14vh; 
    width: 31vh;
    padding: 7px;
    z-index: 9999;
    white-space: nowrap;
    }
  }
  @media (min-width: 701px)and (max-width: 766px)  {
    #texto_login {
      font-size:0.9rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 28vh;
    right: -23vh; 
    width: 53vh;
    padding: 7px;
    z-index: 9999;
    white-space: nowrap;
    }
  }

  @media (min-width: 653px)and (max-width: 700px)  {
  #texto_login {
    font-size:0.8rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 43vh;
    right: -27vh; 
    width: 65vh;
    padding: 8px;
    z-index: 9999;
    white-space: nowrap;
  }
}


  @media (max-width: 540px) {
    #texto_login {
      font-size:0.8rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 45vh;
    right: -14vh; 
    width: 32vh;
    padding: 1px;
    z-index: 9999;
    white-space: nowrap;
    }
  }
  @media (max-width: 430px) {
    #texto_login {
      font-size:0.5rem;
      top: 55vh;
      padding: 6px;
      right: -8vh; /* Ajusta esto para que esté alineado a la derecha */
     width:  18vh;
    }
  }
</style>
<a href="https://cedidentserver.com/"><span id="texto_login">RESULTADOS EN LÍNEA</span></a>
<article class="container mt-5">
                <div class="row">
                    
                     <div class=" margin2  col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                    <div class="col-12 tarjeta-servicio">
                        <img class="card-img-top" src="./assets/img/impresion/img1.jpeg"  alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text text-center"> Escaneo Intraoral</h5>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                    
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                      <div class="col-12 tarjeta-servicio">
                        <img class="card-img-top" src="./assets/img/impresion/img2.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="text text-center">Splin quirurgico 3D</h5>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>

                   
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                    <div class="col-12 tarjeta-servicio">
                        <img class="card-img-top" src="./assets/img/impresion/img4.jpeg" alt="Card image cap">
                        <div class="card-body">
                      <h5 class="text text-center">Splin quirurgico 3D</h5>
                          <p class="card-text"></p>
                        </div> 
                      </div>
                    </div>
                                        
                </div>
        <div class="row justify-content-center">
                                    
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                <div class="col-12 tarjeta-servicio">
                        <div class="video-container">
                            <video class="video-pequeno" controls loop autoplay muted src="./assets/img/impresion/video1.mp4">
                                <!-- Este tag de pista especifica un archivo de subtítulos para el video. Incluye varios atributos, como src, default, kind, srclang, y label. -->
                                <track src="captions.vtt" default kind="captions" srclang="es" label="Español (Latinoamérica)">
                                <!-- Este texto se muestra si el navegador web del usuario no admite el tag de video -->
                                Tu navegador no soporta video
                            </video>
                        </div>
                    <div class="card-body">
                            <h5 class="text text-center">Impresion 3D</h5>
                        <p class="card-text"></p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5">
                <div class="col-12 tarjeta-servicio">
                        <div class="video-container">
                            <video class="video-pequeno" controls loop autoplay muted src="./assets/img/impresion/video2.mp4">
                                <track src="captions.vtt" default kind="captions" srclang="es" label="Español (Latinoamérica)">
                                Tu navegador no soporta video
                            </video>
                        </div>
                    <div class="card-body">
                            <h5 class="text text-center">Escaneo Intraoral</h5>
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


<?php include_once("./layouts/footer.php"); ?>