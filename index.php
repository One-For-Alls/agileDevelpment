<?php 
session_start(); 

if(isset($_SESSION['mensaje'])) {

  $send = $_SESSION['mensaje'];

  unset($_SESSION['mensaje']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./public/img/logo2.svg" type="image/x-icon">
  <link rel="stylesheet" href="./public/css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="./public/css/menu.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;1,200;1,300&display=swap" rel="stylesheet">
  <title>Agile Development</title>
</head>

<body>
  <?php require_once 'pages/header.php';?>
  <main id="container-main">
    <?php 
      require_once 'pages/principal.php';
      require_once 'pages/services.php';
      require_once 'pages/proyects.php';
      require_once 'pages/about.php';
      require_once 'pages/contact.php';
      ?>
  </main>
  <footer>
    <div class="footer-container">
      <div class="footer-body">
        <div class="footer-child">
          <div class="child-first">
            <img src="./public/img/logo.webp" alt="logo">
            <h1>Desarrollo de sistemas a medida</h1>
            <h4>&copy; Agile Development Todos los derechos reservados</h4>
          </div>
        </div>
        <div class="footer-child">
          <div>
            <p>"Nuesto compromiso para con nuestros clientes, es brindar un servicio de calidad y accesibilidad a los servicios brindados, para potenciar el alcance de sus negocios"
            </p>
          </div>
        </div>
        <div class="footer-child">
          <div>
            <h2>Redes Sociales</h2>
            <div class="footer-redes">
              <a href="https://www.facebook.com/ParadiseLoveStore" target="_blank">Facebook</a>
              <a href="https://www.tiktok.com" target="_blank">Tik Tok</a>
              <a href="https://www.instagram.com" target="_blank">Instagram</a>
              <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
              <a href="https://wa.link/2myzl6" target="_blank">WhatsApp</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="alert-send <?php (isset($send) == 'ok') ? 'block' : '' ?>">
    <h1>Felicidades</h1>
    <p>Correo enviado satisfactoriamente</p>
  </div>
  
</body>
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
<script src="./public/js/index.js"></script>
</html>