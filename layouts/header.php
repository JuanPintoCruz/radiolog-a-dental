<?php 
  function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    return $protocol;
}
define( 'SITE_URL', siteURL() );
if(SITE_URL=="https://"): 
$title="https://cedidentdigital.com/";
  else: 
      $title="http://cedidentdigital.com/";
  endif; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php if($title ): ?>
    <title>Cedident digital - Centro de diagnóstico Radiológico Dentomaxiofacial</title>
  <?php else: ?>
    <title> <?= $titleseo ?> - Cedident digital</title>
  <?php endif;  ?>

  <link rel="stylesheet" href="<?=base_url?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/leaflet.css">
  <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:400,500,700&display=swap" rel="stylesheet">
   <!--FUENTE-->
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
  
<link rel="icon" type="image/png" href="<?=base_url?>assets/img/favicon.png" />
<?php if(SITE_URL=="https://"): ?>
  <link rel="stylesheet" href="<?=base_url?>assets/icons/flaticon.css">
  <?php else: ?>
  <link rel="stylesheet" href="http://cedidentdigital.com/assets/icons/flaticon.css">
  <?php endif; ?>
  <link rel="stylesheet" href="<?=base_url?>assets/css/jquery.bxslider.css">

<script src="https://kit.fontawesome.com/71e54281c9.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://sysdentist.com/css/sysdentist_consulta.css">

</head>
  <div class="header_nav_con">
      
      <div class="download">
    <div class="container descargar d-flex justify-content-end align-items-center">
    <div class="dropdown">
      
  <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
  Descarga tu solicitud 
  </button>
     
  <div class="dropdown-menu">

     <!-- poner sus url a los PDFS -->
      <a class="dropdown-item" href="<?=base_url?>assets/4PDF/SEDESLIMA.pdf" target="__blank">Sede-Lince
     </a>
      <a class="dropdown-item" href="<?=base_url?>assets/4PDF/SEDESLIMA.pdf" target="__blank">
      Sede-Santa Anita
    </a>
    <a class="dropdown-item" href="<?=base_url?>assets/4PDF/SEDESLIMA.pdf" target="__blank">Sede-AteVitarte</a>

    <a class="dropdown-item" href="<?=base_url?>assets/4PDF/HUANUCO.pdf" target="__blank">Sede-Huanuco 
    </a>
    
    <a class="dropdown-item" href="<?=base_url?>/4PDF/TARAPOTO.pdf" target="__blank">
    Sede-Tarapoto</a>
    <a class="dropdown-item" href="<?=base_url?>assets/4PDF/TINGOMARIA.pdf" target="__blank">
    Sede-Tingo Maria</a>
      
  </div>
</div>
    </div>
  </div>
  <nav class="navbar  navbar-expand-lg navbar-light  h_nav">
    <div class="container">
    <div class="nav_p d-flex justify-content-between size_logo">
      <a class="navbar-brand" href="<?=base_url?>">
        <img src="<?=base_url?>assets/img/logoC.png"  alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fli flaticon-menu"></i>
      </button>
    </div>
    <div class="collapse navbar-collapse  justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
             <!-- poner sus url a los  <?=base_url?>-->
        <a class="nav-item nav-link" href="<?=base_url?>nosotros.php">Nosotros</a>
              <li class="nav-item dropdown diagnostico">
              
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Radiografias
            </a>
                                                                                  
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <!-- poner sus url a los  <?=base_url?>-->
              <a class="dropdown-item" href="<?=base_url?>diagnostico/radiografias-extraorales.php">Radiografias Extraorales</a>
              <a class="dropdown-item" href="<?=base_url?>diagnostico/radiografias-intraorales.php">Radiografias Intraorales</a>
              <a class="dropdown-item" href="<?=base_url?>diagnostico/analisis-cefolametricos_digitales.php">Análisis Cefalométricos Digitales</a>
              <a class="dropdown-item" href="<?=base_url?>diagnostico/fotografia-clinica.php">Fotografía clínica</a>
            </div>
          </li>

        <li class="nav-item dropdown">
    
    <div class="laboratorio">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Tomografia 3D
          </a>
    </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <!--Agregar url<?=base_url ?> -->
            <a class="dropdown-item " href="<?=base_url?>tomografia/endodoncia.php">Tomografía para endodoncia</a>
            <a class="dropdown-item " href="<?=base_url?>tomografia/mediano.php">Tomografía para  campo mediano </a>

            <a class="dropdown-item " href="<?=base_url?>tomografia/grande.php">Tomografía campo grande <br> (ortodoncia - Macizo facial)</a>
            <a class="dropdown-item " href="<?=base_url?>tomografia/ATM.php">Tomografía para ATM</a>
          </div>
        </li>

      <li class="nav-item dropdown diagnostico">
         
         <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Planificación
      </a>

      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <!-- Agregar url"<?=base_url ?> -->
        <a class="dropdown-item " href="<?=base_url?>diagnostico/implantes.php">PLanificaciòn quirurgica para implantes</a>
        <a class="dropdown-item " href="<?=base_url?>diagnostico/invisible.php">Planificaciòn  para alineadores invisibles</a>

        <a class="dropdown-item " href="<?=base_url?>diagnostico/ortognatica.php">Planificaciòn  quirurgica para cirugia ortognatica</a>
      </div>
    </li>
         <!-- poner sus url a los  <?=base_url?>-->
      <a class="nav-item nav-link" href="<?=base_url?>impresion.php">Escaneo e Impresiòn 3D</a>
      </div>
    </div>
    </div>
  </nav>     
  </div>