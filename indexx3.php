<?php
//email
if(isset($_POST["email"])){
if(!empty($_POST["email"])){
$email=$_POST["email"];
$mensaje="gracias por suscribirte"."\r\n"."¿Aqui que deberia de ir?";
$asunto="Gracias por suscribirte";
$header="From: noreply@example.com"."\r\n";
$header.="Reply-To: noreply@example.com"."\r\n";
$header.="X-Mailer:PHP/".phpversion();
$mail=@mail($email,$asunto,$mensaje,$header);
if($mail){
    echo "<h3>Hemos enviado tu mensaje</h3>";
    header('location: indexadmin.php');
}else{
    echo "<h3>NO Hemos enviado tu mensaje</h3>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Samday | Inicio </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- Link para font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/62034752b0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <style>@import url ('https://fonts.googleapis.com/css2? family = Nerko + One & display = swap'); </style>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Nerko + One & display = swap" rel = "hoja de estilo">	
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/footer.css"> 
    <link  rel="icon"   href="img/favicon.png" type="image/png" />

</head>
<body>
<!--Encabezado1-->
<header style="background-image: url('img/FONDO.jpg');background-size: cover;background-attachment: fixed;">
    <nav>
        <a href="indexx2.php">INICIO</a>
        <a href="#">TIENDA</a>
        <a href="Acerca%20de2.php">ACERCA DE</a>
        <a href="Contacto2.php">CONTACTANOS</a>
        <a href="Preguntas2.php">AYUDA</a>
        <a href="#" style="align-content:stretch;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
    </nav>
</header>  



<!--Carrusel-->
<div class="wrapper">
<title>Abrir un modal al cargar la pagina</title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
 
 
<!-- Modal -->
<div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-right: 16px;background:rgba(0,0,0,0.8);"><div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content" style="background: rgba(232, 63, 0, 0.8);"><div class="modal-header"><button class="close" data-dismiss="modal" type="button">×</button>
        <h4 class="modal-title" style="margin-left:auto;margin-right:auto;">FELICIDADES HAS GANADO EL CUPON</h4></div><div class="modal-body"><img class="promo1" src="imgAlert/Felices.png" style="width: 100%;height: 100%;" alt="">
</div><div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" type="button" style="width: 100%;height: 40px;">Close</button>
      </div></div></div></div><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
 $(function(){
  $("#myModal").modal();
 });
</script>
       <section>
        <hr>
        <div class="container">
         <br><br><br><br><br>
          <h3 class="samday">Bienvenido <a href="index.php">Cerrar Sesion</a></h3>
          <!-- Button trigger modal -->
          <h3>Envio Gratis Solo Por <strong>Hoy</strong>&nbsp;&nbsp;<i class="fab fa-algolia"></i></h3>
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <img src="img/carrusel1.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                      <h4 style="color:#D2691E">Conoce todos los productos que ofrecemos...</h4>
                      <p>Te encantaran!</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/carrusel5.jfif" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                      <h4 style="color:#D2691E">Visita Nuestra Tienda</h4>
                      <p>Todo tipo de zapatos, vestido y accesorios!</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/carrusel3.jpg" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                      <h4 style="color:#D2691E">OFERTAS ESPECTACULARES</h4>
                      <p>Te enamoraras con nuestros productos y ofertas!</p>
                    </div>
                  </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              
              <!-- LOS MAS VENDIDOS-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="http://www.econsolid.com/k/css/swiper.css">

    <!-- Demo styles -->
    <style>
     .swiper-container {
        width: 960px;
        height: 300px;
        margin: 19px 0px 0px -9px;
        align-items: center; 
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>

<hr><hr><hr>
<h3>LO MAS VENDIDO</h3>   
<!-- Swiper -->

<div class="swiper-container" style="margin-left:auto;margin-right:auto;">
            <!--Contenedor Swiper-->
            <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!--Contenedor Item Swiper-->
                        <a href="#">
                        <img src="" width="267" height="160" alt="" /></a>
                    </div><!--Fin Contenedor Item Swiper-->

                    <div class="swiper-slide">
                        <!--Contenedor Item Swiper-->
                        <a href="#">
                        <img src="" width="267" height="160" alt="" /></a>
                    </div><!--Fin Contenedor Item Swiper-->

                    <div class="swiper-slide">
                        <!--Contenedor Item Swiper-->
                        <a href="#">
                        <img src="" width="267" height="160" alt="" /></a>
                    </div><!--Fin Contenedor Item Swiper-->

                    <div class="swiper-slide">
                        <!--Contenedor Item Swiper-->
                        <a href="#">
                        <img src="" width="267" height="160" alt="" /></a>
                    </div><!--Fin Contenedor Item Swiper-->

                    <div class="swiper-slide">
                        <!--Contenedor Item Swiper-->
                        <a href="#">
                        <img src="" width="267" height="160" alt="" /></a>
                    </div><!--Fin Contenedor Item Swiper-->
                    
             </div>

             <div class="swiper-pagination"></div>
                
             <div class="swiper-button-next swiper-button-white"></div>
             <div class="swiper-button-prev swiper-button-white"></div>
                
        </div><!--Fin Contenedor Swiper-->

            <!-- Swiper JS -->
            <script src="http://www.econsolid.com/k/js/swiper.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                slidesPerView: 3,
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 30,
                loop: true,
                autoplay: 2900,
                freeMode: true
            });
            </script> 
                <br><br>
                <h3>Juega y gana un cupon</h3>
                <br><br>
                <a href="juego.php" style="border: 1px solid black;padding: 10px;background: rgba(232, 63, 0, 0.8); color: #ffffff;text-decoration: none; text-transform: uppercase;font-family: 'Helvetica', sans-serif;border-radius: 50px;margin-left:auto;margin-right:auto;text-align: center;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JUGAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <br><br>  
            </div>          
    </section>                                                      
</div>
   <!--Pie de Pagina-->
<div class="info-container">

	<div class="info-main">
        <h3>Contactanos</h3>
        <p style="text-align:justify; color: black;">Para cualquier acaracion o duda visite nuestra seccion de ayuda o puede mandarnos un correo directo a  realsamday@gmail.com le responderemos enseguida y si desea obtener mas informacion pulse el boton de abajo. Le agradecemos de antemano su visita y su compra..."EL ESTILO NUNCA PASA DE MODA".</p>
        <a href="Preguntas.php">Mas Informacion</a>
	</div>
</div>
	
<footer>
	<div class="footer-container">
		<div class="footer-main">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group footer-columna">
                <h3>Suscríbete</h3>
                <label for="email" >Correo Eletronico</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" style="width: 300px;height: 40px;">
              </div>
              <button style="width: 100%;height: 40px;" type="submit" class="btn btn-primary">Enviar</button>
            </form>

			<div class="footer-columna">
				<h3>Dirección</h3>
				<span class="fa fa-map-marker"><p>244 Av. Lopez Mateos - Aguascalientes,Mexico</p></span>
				<span class="fa fa-phone"><p>(+52) 4951098973 </p></span>
				<span class="fa fa-envelope"><p>realsamday@gmail.com</p></span>
			</div>

			<div class="footer-columna">
				<h3>Sobre Nosotros</h3>
				<p style="text-align: justify;">Nuestro personal está altamente calificado en cada una de las aéreas de nuestra empresa esto nos ayuda a garantizar un trabajo profesional  y de alta calidad, así cumpliendo con las expectativas de nuestros clientes..</p>
			</div>
        </div>
    </div>

	<div class="footer-copy-redes">
		<div class="main-copy-redes">
	        <div class="footer-copy">
					&copy; 2020, Todos los derechos reservados - | SAMDAY |.
			</div>
			<div class="footer-redes">
				<a href="https://www.facebook.com/SamDay-107865224503474/" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-youtube-play"></a>
				<a href="#" class="fa fa-github"></a>
			</div>
        </div>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
  </body>
</html>