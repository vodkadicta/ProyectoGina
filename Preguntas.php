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
    <title>Samday | Preguntas Frecuentes</title>

    <!-- Links de aquí mismo -->
    <link rel="stylesheet" href="CSS/Preguntas.css">        
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
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');
        .preguntasf{
            font-family: 'Castoro';
            text-align: center;
            font-size: 25px;
            padding-top: 5px;
        }  
        #accordion{
            padding-left: 325px;
            width: 1099px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');
        .dudas{
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
        <br><br><br><br><br><br>
       <h3 class="preguntasf" style="color: white">PREGUNTAS FRECUENTES</h3>
       <h4 class="dudas" style="color: white">Si tienes dudas o necesitas consultar algo, puedes llamar al  <strong>+52 449 541 8969</strong></h4>
        <div id="accordion" >
        <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button style="text-align: left; width:100px;" id="preguntas" class="btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  ¿Proveen envíos internacionales?
                  <i id="flechabajo" class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" >
          <div class="card-body">
            Sí, el costo estándar del envío es de $60. Esto aplica en el pedido del cliente y tarda de 3 a 5 días hábiles en llegar.
            También se ofrece la posibilidad de que el envío sea gratuito solo si la compra es de más de $1000 en productos.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 >
            <button style="text-align: left; width:100px;" id="preguntas" class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Si hay fallos, ¿puedo devolver la mercancía?    
                <i id="flechabajo" class="fas fa-chevron-down"></i>
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            Sí, claro. Cualquier defecto de fábrica que se presente garantiza una devolución de tu dinero o intercambio de cualquier otra prenda con el mismo valor monetario o bien, puedes pagar la diferencia de algún producto que te guste.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button style="text-align: left; width:100px;" id="preguntas" class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿Cuánto tiempo tardará en llegar mi pedido?
                <i id="flechabajo" class="fas fa-chevron-down"></i>
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            Tarda de 3 a 5 días hábiles.
            <p class="nota">Nota: debido a la contingencia los pedidos se han retrasado por 1 o 2 días, agradecemos tu comprensión.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button style="text-align: left; width:100px;" id="preguntas" class="btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                ¿Qué tarjetas aceptan para hacer el pago?
                <i id="flechabajo" class="fas fa-chevron-down"></i>
            </button>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
            <p class="tarjeta">Visa <img src="imgPreguntas/Visa.png" width="60px" alt=""> &nbsp;&nbsp; Mastercard <img src="imgPreguntas/MasterCard.png" width="60px" alt=""> &nbsp;&nbsp; American Express <img src="imgPreguntas/AmericanExpress.png" width="60px" alt=""></p>
          </div>
        </div>
      </div>
    </div> 
    <br><br><br><br><br><br> 
    
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    -->
  </body>
</html>
