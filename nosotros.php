<?php
$titleseo="Nosotros";
 include_once("./config/parameters.php");
  
 include_once("./layouts/header.php"); ?>

<style>

  @media (min-width: 1280px) {
    #texto_login {
    font-weight: bold;
    color: white;
    text-align:center;
    background-color: rgb(36,113,163);
    transform: rotate(270deg);
    position: absolute;
    top: 33vh;
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
    top: 33vh;
    right: -17vh; 
    width: 42vh;
    padding:10px;
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
    top: 50vh;
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
    top: 14vh;
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
    top: 15vh;
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
    top: 13vh;
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
    top: 15vh;
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
      font-size:0.9rem;
    font-weight: bold;
    color: white;
    text-align: center;
    background-color: rgb(36, 113, 163);
    transform: rotate(270deg);
    position: absolute;
    top: 15vh;
    right: -14vh; 
    width: 32vh;
    padding: 7px;
    z-index: 9999;
    white-space: nowrap;
    }
  }
  @media (max-width: 430px) {
    #texto_login {
      font-size:0.5rem;
      top: 9vh;
      padding: 6px;
      right: -6vh; /* Ajusta esto para que esté alineado a la derecha */
     width:  15vh;
    }
  }


</style>

     <a href="https://cedidentserver.com/"><span id="texto_login">RESULTADOS EN LÍNEA</span></a>
     <div class="banner_n  d-flex justify-content-center  align-items-center">
    <div class="title_banner text-center   justify-content-center   container">
      <h2 class="title_banner_n"></h2>
    </div>   
</div>

<div class="container my-5">
    <div class="contenido">
        <div class="title_contenido">
        Porque elegirnos?
        </div>
        <div class="desc_contenido">
            <p>Somos una empresa que nace de la experiencia de sus creadores y de su visión para identificar las necesidades de su comunidad y de su capacidad para proveer soluciones.
Nos proyectamos en el corto plazo en atender la demanda cada vez más creciente de servicios odontológicos,  generando nuevas y creativas formas a través de los servicios especializados de odontólogos peruanos.</p>
        </div>
    </div>

    <div class="image_nosotros my-5">
    <img src="assets/img/banner_nosotrosv2.jpg" class="w-100" alt="">
    </div>
    <div class="contenido_two">
    <div class="title_contenido">
   Misión
        </div>
        <div class="desc_contenido">
            <p>Brindar soluciones odontológicas integrales; con estándares de calidad facilitando el tratamiento a todas las ramas de la estomatología . Empleando tecnología de vanguardia y contando con  profesionales altamente calificados que garantizan resultados óptimos.</p>
        </div>
    <div class="contenido_two">
    <div class="title_contenido">
   Visión
        </div>
        <div class="desc_contenido">
            <p>Ser considerados por nuestros clientes, en el presente año, aliados estratégicos, superando sus expectativas.</p>
        </div>
    <div class="title_contenido">
   Nuestros Valores
        </div>
        <ul>
            <li>Pasión</li>
            <li>Actitud positiva</li>
            <li>Comunicación</li>
            <li>Empatía</li>
            <br></br>
        </ul>
    </div>
</div>



</div>
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
    
    
 <!--Consulta lateral-->
 

<?php include_once("./layouts/footer.php"); ?>