<?php
$titleseo = "Afiliate";
include_once("./config/parameters.php");

include_once("./layouts/header.php"); ?>
<div class="banner_n  d-flex justify-content-center  align-items-center">
    <div class="title_banner text-center   justify-content-center   container">
        <h2 class="title_banner_n"></h2>
    </div>
</div>
<article class="container mt-5 seccion_contacto">

    <div class="container-fluid">
        <div class="margin ">
            <div>
                <div class="conatiner mt-5">
                    <h3 class="margin">Contactenos</h3>
                    <div>
                    <div class="container-fluid">
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