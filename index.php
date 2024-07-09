<?php
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

<div id="carouselExampleControls" class="carusel carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <a href="https://cedidentserver.com/"><span id="texto_login">RESULTADOS EN LÍNEA</span></a>
    <div class="carousel-item active">

      <img class="d-block w-100" src="assets/img/portada1.jpg" alt="First slide">

      <div class="carousel-caption d-none d-md-block">
        <h2>RADIOLOGÍA DIGITAL</h2>
        <p>Equipos de ultima generacion</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/portada2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h2>TOMOGRAFÍA VOLUMÉTRICA</h2>
        <p>SU DIAGNOSTICO EN BUENAS MANOS.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/portada.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h2>PLANIFICACIÒN QUIRÙRGICA</h2>
        <p>para, implantes, para alineadores invisibles y para cirugia ortognatica. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/impresion3D.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h2>ESCANEO E IMPRESIÒN 3D</h2>
        <p></p>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <div class="boxes mb-5">
    <div class="row">
       
      <div class="col-xs-12 col-md-4 box text-center d-flex flex-column justify-content-center">
        <a href="<?=base_url?>diagnostico">
            
            <div class="row ">
          <div class="col-8 d-flex flex-column justify-content-center">
            <h4>Radiografias Extraoral</h4>
            <p>Equipos de última generación  </p>
          </div>
          <div class="col-4">
            <i class="fli flaticon-orthodontic"></i>
          </div>
        </div>
        </a>
      </div>
             
      <div class="col-xs-12 col-md-4 box text-center d-flex flex-column justify-content-center">
            <a href="<?=base_url?>diagnostico/implantes.php">
        <div class="row">
          <div class="col-8 d-flex flex-column justify-content-center">
            <h4>Planificaciòn de implantes y alineadores</h4>
            <p>Resultados  inmediatos</p>
          </div>
          <div class="col-4">
            <i class="fli flaticon-odontology"></i>
          </div>
        </div>
        </a>

      </div>
      <div class="col-xs-12 col-md-4 box text-center bg-black d-flex flex-column justify-content-center">
            <a href="<?=base_url?>impresion.php">
        <div class="row">
          <div class="col-8 d-flex flex-column justify-content-center">
            <h4>Escaneo e impresiòn 3D </h4>
            <p>Buenos resultados</p>
          </div>
          <div class="col-4">
            <i class="fli flaticon-dental"></i>
          </div>

        </div>
        </a>

      </div>
    </div>
  </div>
</div>
<div class="seccion_top mb-5">
 <div class="seccion_nosotros container">
    <h3 class="mb-5 title_nosotros">Nosotros</h3>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <ul class="slider1">
          <li class="row mr-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="story_img story_img_first">
                <img src="assets/img/nosotros1.jpg" alt="">
              </div>

            </div>

          </li>
          <li class="row mr-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="story_img story_img_first">
                <img src="assets/img/nosotros2.jpg" alt="">
              </div>

            </div>

          </li>

          <li class="row mr-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="story_img story_img_first">
                <img src="assets/img/nosotros3.jpg" alt="">
              </div>

            </div>

          </li>

          <li class="row mr-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="story_img story_img_first">
                <img src="assets/img/nosotros4.jpg" alt="">
              </div>
            </div>
          </li>

        </ul>
      </div>
      <div class="col-xs-12 col-md-6 d-flex align-items-center">
        <div class="texto_nosotros">
          <p>Brindamos soluciones odontológicas integrales; con estándares de calidad,. facilitando el tratamiento a todas las ramas de la estomatología . Empleando tecnología de vanguardia y contando con profesionales altamente calificados que garantizan resultados óptimos.</p>
        </div>
      </div>

    </div>
  </div>
  <div class="seccion_ventajas mb-5 mt-5 ">
    <h3 class="titulo_ventajas mb-5 pt-5  container"></h3>
    <div class="boxes_ventajas container">
      <div class="row text-center">
        <div class="col-sm-6 col-lg-3 col-md-3">
          <i class="fli flaticon-teeth-1 mb-3 d-block"></i>
          <div class="text">
            <h5>Precisión</h5>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-3">
          <i class="fli flaticon-tooth-2 mb-3 d-block"></i>
          <div class="text">
         <h5>Rapidez</h5>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-3">
          <i class="fli flaticon-tooth-4 mb-3 d-block"></i>
          <div class="text">
              <h5>Atención inmediata</h5>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 pb-5 col-md-3">
          <i class="fli flaticon-tooth-3 mb-3 d-block"></i>
          <div class="text">
         <h5>Rentabilidad</h5>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="seccion_testimoniales mb-5 container">

    <h3 class="titulo_testimoniales mb-4">Testimonios</h3>
    <ul class="slider2">
           <li class="tab">
         <p> DR. GUILLERMO RÍOS. CLÍNICA DENTAL RÍOS
Trabajo con Cedident hace varios años, las radiografías nítidas de alta calidad, excelente servicio, precio al alcance de nuestros pacientes. Super puntuales recomendado 100%.
        </p>
        <div class="testimonial_posicion">
       
        </div>
      </li>
      <li class="tab">
         <p>SAUL PEÑALOZA, HOSPITAL ALMENARA
Oportuna Atención, Calidad y adecuada interpretación de las imágenes.
        </p>
           <div class="testimonial_posicion">
      
        </div>
      </li>
      <li class="tab">
         <p>Dr. ALEX PEREZ.
Recomendamos a Cedident, atención especializada en imageneologia, pronta atención y buen servicio.
        </p>
        <div class="testimonial_posicion">
       
        </div>
      </li>
      <li class="tab">
         <p> DR. GUILLERMO RÍOS. CLÍNICA DENTAL RÍOS
Trabajo con Cedident hace varios años, las radiografías nítidas de alta calidad, excelente servicio, precio al alcance de nuestros pacientes. Super puntuales recomendado 100%.
        </p>
        <div class="testimonial_posicion">
       
        </div>
      </li>
      <li class="tab">
         <p>SAUL PEÑALOZA, HOSPITAL ALMENARA
Oportuna Atención, Calidad y adecuada interpretación de las imágenes.
        </p>
           <div class="testimonial_posicion">
      
        </div>
      </li>
      <li class="tab">
         <p>Dr. ALEX PEREZ.
Recomendamos a Cedident, atención especializada en imageneologia, pronta atención y buen servicio.
        </p>
        <div class="testimonial_posicion">
       
        </div>
      </li>
   
    </ul>
  </div>

  <div class="seccion_team mb-5 ">
    <div class="container">
    <h3 class="mb-5">Nuestro Equipo de Trabajo</h3>
    <ul class="slider3">
      <li class="person">
        <div class="staff_image">
          <img class="img_team" src="assets/img/team/staff1.jpg" alt="">
        </div>
      </li>
      <li class="person">
        <div class="staff_image">
          <img class="img_team" src="assets/img/team/staff2.jpg" alt="">
        </div>
      </li>
      <li class="person">
        <div class="staff_image">
          <img class="img_team" src="assets/img/team/teamnuevo.jpg" alt="">
        </div>
      </li>
      <li class="person">
        <div class="staff_image">
          <img class="img_team" src="assets/img/team/staff4.jpg" alt="">
        </div>
      </li>
      <li class="person">
        <div class="staff_image">
          <img class="img_team" src="assets/img/team/staff5.jpg" alt="">
        </div>
      </li>
      <!-- <li class="person">
        <div class="staff_image">
          <img class="img_team" src="assets/img/team/staff6.jpg" alt="">
        </div>
      </li> -->
      <li class="person">
        <div class="staff_image">
          <img class="img_team" src="assets/img/team/staff7.jpeg" alt="">
        </div>
     
      </li>
  
    </ul>
    </div>
  </div>
  </div>

  <div class="seccion_asociados container">
    <h3 class="mb-5">Nuestras Sedes</h3>
    <ul class="row d-flex justify-content-center align-items-center">
      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/CEDIDENT+DIGITAL/@-12.0903397,-77.0348255,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c860baed185d:0x734bb1b112ae863!8m2!3d-12.090345!4d-77.0326368" target="__blank">
                      <img src="assets/img/sedelince.jpg" alt="">
        </a>
        <a href="https://api.whatsapp.com/send?phone=51980200123&text=&source=&data="  target="__blank">
            <img class="mt-3" src="assets/img/sedeswp/WPLINCE.png" />
        </a>
      </li>

      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/Cedident+Digital/@-12.049439,-76.9679255,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c662c8255c4f:0x7f752b0ef9fc8cf4!8m2!3d-12.0494443!4d-76.9657368" target="__blank">  
        <img src="assets/img/sedesanta.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51922430094&text=&source=&data=" target="__blank">
            <img class="mt-3" src="assets/img/sedeswp/WPSANTAANITA.png" />
        </a>
      </li>

      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/Cedident+Digital+Ate+Vitarte/@-12.0307716,-76.9296787,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c56a6cc15595:0x5217035c4964a6d9!8m2!3d-12.0307769!4d-76.92749" target="__blank">
            <img src="assets/img/sedeate.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51993109764&text=&source=&data=" target="__blank" >
            <img class="mt-3" src="assets/img/sedeswp/WPATE.png" />
        </a>
      </li>
</ul>
      <ul class="row d-flex justify-content-center align-items-center" >
      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/CEDIDENT/@-9.9270476,-76.2396791,17z/data=!3m1!4b1!4m5!3m4!1s0x91a7c31d4340d62b:0x4be617bf60670921!8m2!3d-9.9270529!4d-76.2374904" target="__blank">
          <img src="assets/img/sede-huanuco.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51931564966&text=&source=&data=" target="__blank">
            <img class="mt-3" src="assets/img/sedeswp/WPHUANUCO.png" />
        </a>
      </li>

      <!-- <--Modificar--> 
      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://maps.app.goo.gl/DAJw46aMDUaUPTmEA" target="__blank">
            <img src="assets/img/tarapoto.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51993109764&text=&source=&data=" target="__blank" >
            <img class="mt-3" src="assets/img/sedeswp/WPTARA.png" />
        </a>
      </li>

      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://maps.app.goo.gl/LhP9m6wk5A28FJhx6" target="__blank">
          <img src="assets/img/sede-tingo.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51931564966&text=&source=&data=" target="__blank">
            <img class="mt-3" src="assets/img/sedeswp/WPTINGO.png" />
        </a>
      </li>

     </ul>
  </div>

</div>
</body>
<style>
  @media (max-width:992px){
    .text-uppercase{
   display:none;
  }
    }
  
</style>
<br> <br>
<footer class="py-5 footer-home">
<div style="background-color: rgb(27, 38, 102)">

    </footer>
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.bxslider.js"></script>
<script src="assets/js/app.js"></script>
<script src="https://sysdentist.com/js/sysdentist_consulta.js"></script>
<script>
      var tokenConsulta = '$2y$10$efRbhsWvoOoaOoCRQReKHexEo6fRPdqTiWFx84YnwYaunuuORWhRe';
      var hostConsulta = 'https://sysdentist.com';
      var nombreEmpresa = 'Cedident';
    </script>
<script src="https://sysdentist.com/js/sysdentist_consulta.js"></script>
</html> 