<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/desingexp.css">
    <link rel="shortcut icon" href="img/LogoYB.png" type="image/x-icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<link rel="stylesheet" href="js/">
    <title>Bienvenido!</title>
</head>
<body>
    <header>
		<div class="contenedor">
            <a href="explorador.html" style="text-decoration: none;"><h2 class="logotipo">YourBusiness</h2></a>
			<nav>
				<a class="home" href="explorador.html">Inicio</a>
				<a class="nosotros1" href="quienessomos.html">Nosotros</a>
				<a class="contacto1" href="soporte.html">Contacto</a>
                <a href="exploradorosc.html"><img class="oscuro" src="img/luna (2).png" alt="404"></a>
            </nav>
        </div>
    </header>
    <main>
<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:index.php");
}
?>
<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Bienvenido Al Sistema',
  showConfirmButton: false,
  timer: 1500
})
</script>
        <div class="container">
            <div class="portafolio">
                <a href="exploradorEn.html"><img class="inglés" src="img/En.png" alt=""></a>
                <img src="img/Logoof.png" class="logo" alt="No se encuentra la imagen"> <br><br><br><br><br><br>
                <h1 class="Nombre">YourBusiness</h1>
                <p class="info">Una página que ayudará a tu negocio, con consejos de profesionales, página 100% segura, Aún estamos en versión Beta. 
					No contamos con muchas funciones pero de aqui a un tiempo pondremos mas funciones
                </p>
				<h4 class="lema">Ayudando a tu empresa</h4><br><br>
            </div>
            <br><br>
            <div>   
                <a href="publicar.html">
                    <div class="tiempo1">
                         <img src="img/publicar.png" class="pasatiempo1" alt="404 No se encuentra la imagen" width="120" height= "100" style="border-radius: 6%;">
                        <br>
                        <br>
                        <h5 class="info1">Publicar tu empresa</h5>
                        <p class="desc">Acá puedes publicar tu empresa con un solo clic y llenando los espacios que te proporcionarán y después se enviarán a expertos y se pondrán en contacto contigo</p>
                    </div><br><br>
                </a>
            <a href="quienessomos.html">
				<div class="tiempo2">
					<img src="img/informacion.png" class="pasatiempo1" alt="404 No se encuentra la imagen" width="110" height= "100" style="border-radius: 6%;">
					<br>
					<br>
					<h5 class="info1">Información</h5>
					<p class="desc">Estamos en versión Beta, acá encontraras una pequeña descripción sobre quien somos.</p>
				</div>
			</a>
			<a href="soporte.html">
				<div class="tiempo3">
					<img src="img/soporte.png" class="pasatiempo1" alt="404 No se encuentra la imagen" width="100" height= "100" style="border-radius: 6%;">
					<br>
					<br>
					<h5 class="info1">Soporte Técnico</h5>
					<p class="desc">Tienes una duda, sugerencia, etc. Te puedes poner en contacto con nuestro soporte técnico</p>
				</div> <br><br><br><br><br>
			</a>
            <div class="container1">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/admin.jpeg" class="d-block w-90" alt="bootstrap" 
                                    width="620px" height="450px">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/business.jpeg" class="d-block w-90" alt="..." 
                                    width="620px" height="450px">
                                </div>
                                <div class="carousel-item">
                                    <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blanck">
                                        <img src="img/logo3.jpg" class="d-block w-90" alt="..." 
                                            width="620px" height="450px">
                                    </a>
                                    
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
                    </div>
                </div>
            </div>
    
    
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

            <h5 class="copyright"> 𝐘𝐨𝐮𝐫𝐁𝐮𝐬𝐢𝐧𝐞𝐬𝐬 © 𝟐𝟎𝟐𝟏 </h5> <br>
        </div>
    </main>
    <div class="final">
        <a href="https://www.instagram.com/yourbusiness_of/">
            <img class="instagram" src="img/instagram.png" alt="404">
        </a>
        <a href="https://twitter.com/yourbusiness_gt">
            <img class="twitter" src="img/gorjeo.png" alt="404">
        </a>
        <a href="">
            <img class="facebook" src="img/facebook.png" alt="404">
        </a>
    </div>
  <script>
import Swal from 'sweetalert2'
const Swal = require('sweetalert2')
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
</script>

</body>
</html>