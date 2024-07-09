<?php
$titleseo="Contacto";
 include_once("./config/parameters.php");
  
 include_once("./layouts/header.php"); ?>
<div class="banner_contac  d-flex justify-content-center  align-items-center">
    <div class="title_banner text-center   justify-content-center   container">
        <h2 class="title_banner_n"></h2>
    </div>
</div>


<article class="container mt-5 seccion_contacto" >
         <div class="seccion_asociados container    mb-5">
    <h3 class="mb-5"></h3>
    <ul class="row">
      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/CEDIDENT+DIGITAL/@-12.0903397,-77.0348255,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c860baed185d:0x734bb1b112ae863!8m2!3d-12.090345!4d-77.0326368" target="__blank">
                      <img src="assets/img/sede-lince.jpg" alt="">

        </a>
        <a href="https://api.whatsapp.com/send?phone=51980200123&text=&source=&data="  target="__blank">
            <img class="mt-3" src="assets/img/sedeswp/WPLINCE.png" />
        </a>
      </li>
      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/Cedident+Digital/@-12.049439,-76.9679255,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c662c8255c4f:0x7f752b0ef9fc8cf4!8m2!3d-12.0494443!4d-76.9657368" target="__blank">
        
<img src="assets/img/sede-santa.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51922430094&text=&source=&data=" target="__blank">
            <img class="mt-3" src="assets/img/sedeswp/WPSANTAANITA.png" />
        </a>
      </li>
      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/Cedident+Digital+Ate+Vitarte/@-12.0307716,-76.9296787,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c56a6cc15595:0x5217035c4964a6d9!8m2!3d-12.0307769!4d-76.92749" target="__blank">
            <img src="assets/img/sede-ate.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51993109764&text=&source=&data=" target="__blank" >
            <img class="mt-3" src="assets/img/sedeswp/WPATE.png" />
        </a>
      </li>
      <li class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center mb-3">
        <a href="https://www.google.com/maps/place/CEDIDENT/@-9.9270476,-76.2396791,17z/data=!3m1!4b1!4m5!3m4!1s0x91a7c31d4340d62b:0x4be617bf60670921!8m2!3d-9.9270529!4d-76.2374904" target="__blank">
          <img src="assets/img/sede-huanuco.jpg" alt="">
        </a>
           <a href="https://api.whatsapp.com/send?phone=51931564966&text=&source=&data=" target="__blank">
            <img class="mt-3" src="assets/img/sedeswp/WPHUANUCO.png" />
        </a>
      </li>
     </ul>
     
  </div>
                   
         <div class="container-fluid mt-5">
            <div class="margin ">
                <div>
                    <div class="conatiner mt-5">
           
                        <div>
                            <form action="envio" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" 
                                                name="name" 
                                                required
                                                placeholder="Nombre">
                                            </span>
                                        </div>
                                        <div class="margin">
                                            <span>
                                                <input class="escribir"
                                                required
                                                name="email"
                                                type="email" placeholder="Email">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <span>
                                                <textarea class="escribir form-control margin" name="message" id="" cols="6" rows="6" placeholder="Tu mensaje" required></textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
</article>
                
                
                
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