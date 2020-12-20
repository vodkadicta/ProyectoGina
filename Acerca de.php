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
<html>
    <head>
        <title>Samday | Acerca de</title>

        <!-- Links de aquí mismo -->
        <link rel="stylesheet" href="CSS/Acercade.css">

        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
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
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Castoro&display=swap');    
            .samday{
                font-family: 'Castoro';
                text-align: center;
                font-size: 25px;
                padding-top: 5px;
            }
        </style>
    </head>
    <body>
    <!--Encabezado-->
    <header style="background-image: url('img/FONDO.jpg');background-size: cover;background-attachment: fixed;">
        <nav>
            <a href="index.php">INICIO</a>
            <a href="#">TIENDA</a>
            <a href="Acerca%20de.php">ACERCA DE</a>
            <a href="Contacto.php">CONTACTANOS</a>
            <a href="Preguntas.php">AYUDA</a>
            <a href="loginvista.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
            <a href="#" style="align-content:stretch;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        </nav>
    </header>  
    <br>


    <br><br><br><br>
    <h3 class="samday" style="background:rgba(232, 63, 0, 0.8) ">ACERCA DE SAMDAY</h3>
    

        <div class="bgimg-1">
          <div class="caption">
              <span class="border" style="background-color:transparent;font-size:75px;color: #f7f7f7;">V I S I Ó N</span>
          </div>
        </div>

        <div style="position:relative;">
          <div class="texto" style="color:white;background-color:rgba(232, 63, 0, 0.8);padding:50px 80px;text-align: justify;">
              <p style="color:white;background-color:rgba(232, 63, 0, 0.8);padding:50px 80px;text-align: justify;">Ser líderes en innovación y diseño que ayudan a las personas a sentirse bien consigo mismas, a hacer que las personas amen día a día la persona que son y que cuando se vean en el espejo se gusten y se quieran, pero sobretodo, que se acepten.</p>
          </div>
        </div>

        <div class="bgimg-2">
          <div class="caption">
              <span class="border" style="background-color:transparent;font-size:75px;color: #f7f7f7;">M I S I Ó N</span>
          </div>
        </div>

        <div style="position:relative;">
          <div  class="texto" style="color:white;background-color:rgba(232, 63, 0, 0.8);padding:50px 80px;text-align: justify;">
              <p style="color:white;background-color:rgba(232, 63, 0, 0.8);padding:50px 80px;text-align: justify;">Hacer de Samday la mejor marca de ropa, ser líder en esta industria de la vestimenta, ser la primera opción a la hora de pensar en comprar ropa de moda y sobretodo, cómoda.</p>
          </div>
        </div>

        <div class="bgimg-3">
          <div class="caption">
              <span class="border" style="background-color:transparent;font-size:75px;color: #f7f7f7;">O B J E T I V O</span>
          </div>
        </div>

        <div style="position:relative;">
          <div  class="texto" style="color:white;background-color:rgba(232, 63, 0, 0.8);padding:50px 80px;text-align: justify;">
              <p style="color:white;background-color:rgba(232, 63, 0, 0.8);padding:50px 80px;text-align: justify;">Llegar a muchas personas, con diferentes edades, gustos y sentido de la moda. Que no se sientan excluidos o sientan que nada se les acómoda, porque a la moda lo que te acómoda.</p>
          </div>
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
