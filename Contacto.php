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

<!doctype html>
<html lang="en">
  <head>
    <title>Samday | Contacto</title>

    <!-- Links de aquí mismo -->
    <link rel="stylesheet" href="CSS/Contacto.css">   
        
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Link para font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
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
        .Contacto1{
                font-family: 'Castoro';
                text-align: center;
                font-size: 25px;
                padding-top: 5px;
        } 
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');
        .Contacto2{
            font-family: 'Roboto Slab';
            text-align: center;
            font-size: 20px;
        }        
    </style>
  </head>
 <body style="background-image: url('img/FONDO.jpg');background-size: cover;background-attachment: fixed;">
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
    <br><br><br><br><br>
    <h3 class="Contacto1" style="color:white;">INFORMACIÓN DE CONTACTO</h3>
    <h4 class="Contacto2" style="color:white;">Comunícate con nosotros</h4>
    
    <div id="divcontacto">
        <div style="width:50%; margin-top:25px;" class="fuente">
            <form id="contact-form" class="contacto" name="contact-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control name-field" required="required" placeholder="Tu nombre">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Tu correo">
                </div>
                <div class="form-group">
                    <textarea name="mensaje" id="message" required="required" class="form-control" rows="8" placeholder="Escribe un mensaje"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" style="height: 40px;width: 70px; background: orange;" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <div style="width=45%">
            <img class="raya" src="imgContacto/raya.png" alt="">
        </div>
        <div class="Mapa">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14800.01409869026!2d-102.3349452!3d21.972827799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1606894111955!5m2!1sen!2smx" width="300" height="310" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="social">
            <ul>
                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-facebook-square" style="color:white;"><a href="https://www.facebook.com/SamDay-107865224503474/"> Samday</a></i> <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-envelope" style="color:white;"> realsamday@gmail.com</i> <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-whatsapp-square" style="color:white;"> +52 449 541 8969</i>
                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt" style="color:white;"> Plaza Palmas, local 18A. 
               &nbsp;&nbsp;&nbsp;&nbsp; Avenida Universidad 2229, San José del Arenal, 20130 Aguascalientes, Ags.</i>
            </ul>
        </div>
    </div>
    
<?php
if(isset($_POST["email"])){
if(!empty($_POST["email"])){
$email=$_POST["email"];
$mensaje="Gracias por ponerte en contacto con nosotros, en un momento responderemos a tus dudas"."\r\n";
$asunto="Gracias por contactarnos";
$header="From: noreply@example.com"."\r\n";
$header.="Reply-To: noreply@example.com"."\r\n";
$header.="X-Mailer:PHP/".phpversion();
$mail=@mail($email,$asunto,$mensaje,$header);
if($mail){
    echo "<h3>Hemos enviado tu mensaje</h3>";
    header('location: contacto.php');
}else{
    echo "<h3>NO Hemos enviado tu mensaje</h3>";
}
}
}
?>  
   
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
				<span class="fa fa-phone"><p>(+52) 449 541 8969 </p></span>
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
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   

  </body>
</html>
