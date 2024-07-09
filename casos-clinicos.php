<?php
$titleseo="Casos Clinicos";
 include_once("./config/parameters.php");
  
 include_once("./layouts/header.php"); ?>
<div class="banner_test  d-flex justify-content-center  align-items-center">
    <div class="title_banner text-center   justify-content-center   container">
        <h2 class="title_banner_n"></h2>
    </div>
</div>


<div class="container testimonios">

   


   
      <div class="seccion_historias mb-5 mt-5 container">
    <h3 class="titulo_historia text-center mb-5">Casos Clínicos</h3>
    <ul class="">
      <li class="row mr-4 mb-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="mb-4">
            <img src="assets/img/caso1n.png" alt="">
          </div>
          <div class=" story_img_second">
            <img src="assets/img/caso2n.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
          <div class="story-content">
             <h5 class="story__title font-weight-bold">Control implante </h5>
            <p>Paciente acude al centro de diagnóstico por referencia del clínico, por presunción de haber introducido el implante al seno maxilar. A la evaluación con la radiografía panorámica y tomografía volumétrica, se puede apreciar la ubicación de un cuerpo extraño de densidad metálica (implante), ubicado en pared posterior del seno maxilar y comunicación buco sinusal por el lecho quirúrgico del espacio para la colocación de dicho implante dental.</p>
           
          </div>
        </div>
      </li>
      <li class="row mr-4 mb-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class=" story_img_first mb-4">
            <img src="assets/img/quiste-oseo-simple-control.jpg" alt="">
          </div>
          <div class=" story_img_second">
            <img src="assets/img/quiste-oseo-simple-control2.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
          <div class="story-content">
            <h5 class="story__title font-weight-bold">QUISTE OSEO SIMPLE. </h5>
            <p>Paciente acude a consulta por tratamiento de ortodoncia. El lo remite al centro de diagnostico para exámenes de rutina de documentación ortodóntica; a la evaluación de la radiográfia panorámica, se observa imagen radiolúcida unilocular de límites definidos y bordes finamente corticalizados, ubicado en sínfisis y parasínfisis del lado derecho; que festonea las piezas 4.2 y 4.3. Signos radiográficos compatibles de Quiste óseo traumático  (simple) versus Queratoquiste odontogénico. El cual fue confirmado por anatomía patológica de Quiste óseo simple.
En el control a 6 meses post quirúrgico, se puede apreciar cambios significativos dentro de la lesión, pérdida de bordesy aumento de densidad de la periferia hacia en centro (característicos de proceso óseo reparativo). </p>
          
            
          </div>
        </div>
      </li>

      <li class="row mr-4">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="mb-4">
            <img src="assets/img/tomo.jpg" alt="">
          </div>
          <div class=" story_img_second">
            <img src="assets/img/tomo2.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
          <div class="story-content">
            <h5 class="story__title font-weight-bold">Secuela de tratamiento ortodóntico</h5>
            <p>Paciente acude a consulta  por referencia del ortodoncista para evaluación de retratamiento. A la evaluación inicial en la radiografía panorámica se aprecia ausencia de pieza 2.1, La pieza 1.1 presenta pérdida de estructura ósea (diente flotante).  Piezas 1.3, 1.2, 2.2, 3.2, 3.1, 4.1, 4.2 reabsorción alveolar moderada. Pieza 1.2 reabsorción radicular externa apical(1/3). </p>
        
         
          </div>
        </div>
      </li>

  


    </ul>

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
<div class="login"></div>

<div class="wrapper"></div>

<iframe id="iframe_consulta"></iframe>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script src="https://sysdentist.com/js/consulta.js"></script>

<script>

var tokenConsulta = '$2y$10$iLiITI/UDrOca4ygsepLMeSXvTywcsNPtvmVzJlbeaJwKQFlG3.xK';

var hostConsulta = 'https://sysdentist.com';

var nombreEmpresa = 'Nombre Empresa';

</script>
<!--Consulta lateral end-->
<?php include_once("./layouts/footer.php"); ?>