<?php
$titleseo="Afiliate";
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
                            <form action="envio-afiliate" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="margin">
                                            <span>
                                                <input class="escribir"
                                                 type="text" 
                                                 name="name"
                                                 placeholder="Nombre"
                                                required>
                                            </span>
                                        </div>
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" placeholder="Email"
                                                name="email"
                                                required >
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" 
                                                name="surname"
                                                placeholder="Apellidos"
                                                required>
                                            </span>
                                        </div>
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" placeholder="Celular"
                                                name="phone"
                                                required>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" 
                                                name="address"
                                                placeholder="Direccion"
                                                required>
                                            </span>
                                        </div>
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" placeholder="Fecha de Nacimiento"
                                                name="nacimiento"
                                                required>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" placeholder="¢ÄSedes con la que deseas trabajar?"
                                                name="where"
                                                required
                                                >
                                            </span>
                                        </div>
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" placeholder="Especialidad"
                                                name="especialidad"
                                                required
                                                >
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text" 
                                                name="dni"
                                                placeholder="DNI"
                                                required>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="margin">
                                            <span>
                                                <input class="escribir" type="text"
                                                name="cop"
                                                 placeholder="COP"
                                                required>
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

<?php include_once("./layouts/footer.php"); ?>