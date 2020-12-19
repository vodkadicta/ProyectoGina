<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 1);
ini_set("session.use_trans_sid", 0); 
session_start();

//Configuración del captcha. Fuente por defecto GD. No se usan
//fuentes True Type, aunque sería óptimo usar varias de forma
//aleatoria.
$tamanyo_fuente = 5;
$ancho_fuente = imagefontwidth($tamanyo_fuente);
$alto_fuente = imagefontheight($tamanyo_fuente);
//Mejora robustez: Posicionamiento de caracteres
$posicionar_letras = true;
//Factor horizontal de pegado
$pegarx = 1/10;
//Factores para desplazamiento vertical
$fs1 = 10;
$fs2 = 20;
$dfs = 70;
$mfs = $fs2/$dfs;
//Mejora robustez: Distorsiones. Ángulos en grados.
//Nota: no se puede difuminar si no se rota
$rotar = true;
$angulo_rota_min = 7;
$angulo_rota_max = 15;
$superficializar = false;
$contrastar = true;
$factor_contraste = 12;
$difuminar = true;
//Número de caractereres y medidas de la imagen. El alto de la imagen
//condiciona el desplazamiento vertical. Se ajusta al doble de la proporción
//del angulo de rotación máximo. El tamaño de la fuente y el zoom hacen
//una imagen más o menos precisa. Con tamaño 3 y zoom 4 es mas borrosa que
//con tamaño 5 y zoom 2.
$num_caracteres = 6;
$ancho_imagen = (2+$num_caracteres)*$ancho_fuente;
$alto_imagen = tan(2*$angulo_rota_max*2*M_PI/360)*$ancho_imagen;
$zoom = 2;
//Caracteres para el texto
$letras = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$total_letras = strlen($letras)-1;
//Mejora usabilidad
$no_cerrar = true;
$letras_no_cerrar = "CcGq";
//Mejora robustez
$pegar_mas = true;
$letras_pegar_mas = "1il";
$factor_pegar_mas = 2.5;
//Más usabilidad: no diferenciar ciertas letras parecidas
$asimilar_letras = true;
$similares = array("kK", "lI1", "oO0", "pP", "sS5", "vV", "wW", "xX", "zZ2");
//Más usabilidad: no diferenciar maýus de minús
$icase = false;
     
//Genera imágenes para test.
$testear = false;
$ntest = 25;
$info_test = "";
$ruta_base = dirname($_SERVER["DOCUMENT_ROOT"].$_SERVER["PHP_SELF"]);
$ruta_test = $ruta_base."/test/";
//Variables de la página
$texto = "";
$texto_verif = "";
$nombre = "";
$email = "";
$mensaje = "";
$verificado = false;
$primera_sesion = true;
if (isset($_SESSION["texto"]) && ($_SESSION["texto"]!="") && 
    isset($_GET) && isset($_GET["envio"]) && ($_GET["envio"]=="Enviar")){
    foreach($_GET as $campo=>$valor){
        switch ($campo) {
            case "nombre": $nombre = $valor; break;
            case "email": $email = $valor; break;
            case "texto-verif": 
                $texto_verif = preg_replace("/[ \s]+/", "", $valor); 
            break;            
        }
    }
    $texto1 = $texto_verif;
    $texto2 = $_SESSION["texto"];
    if ($icase){
        $texto1 = strtolower($texto1);
        $texto2 = strtolower($texto2);
    }
    if ($asimilar_letras){
        foreach ($similares as $car){
            $arr_sim = str_split($car);
            $texto1 = str_replace($arr_sim, $arr_sim[0], $texto1);    
            $texto2 = str_replace($arr_sim, $arr_sim[0], $texto2);
        }
    } 
    if ($texto1 == $texto2) {
        //Si se verifica destruimos sesión
        $verificado = true;
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        //Aquí va el proceso del formulario (enviar por email
        //por ejemplo)
    } else {
        $texto_verif = "";
        $texto = "";
    }
} 

if (!$verificado){
    $num_test = 1;
    if ($testear) $num_test = $ntest;
    for ($ktest = 0; $ktest<$num_test; $ktest++){
        $texto = "";
        //creamos texto aleatorio
        srand((double)microtime()*1000000);
        for($i=0;$i<$num_caracteres;$i++){
            $num = mt_rand(0,$total_letras);
            $car = $letras[$num];
            $texto .= $car;
        }
        if (!isset($_SESSION["texto"])) {
            $primera_sesion = true;
        } else {
            $primera_sesion = false;
        }
        $_SESSION["texto"] = $texto;
        //Iniciamos captcha
        $imagen = imagecreate($ancho_imagen, $alto_imagen); 
        $color_fondo = imagecolorallocate($imagen, 255, 255, 255);
        $color_texto  = imagecolorallocate($imagen, 0, 0, 0);
        imagefill($imagen, 0, 0, $color_fondo); 
        $ypos = ($alto_imagen / 2) - ($alto_fuente / 2); 
        $x = 0;
        $y = $ypos;
        $yant = 0;
        $signoyant = 0;
        for ($i=0; $i<$num_caracteres; $i++){
            if (!$posicionar_letras){
                $x += $ancho_fuente;
            } else {
                //En X siempre unimos las letras
                $pegarmas = 1;
                if ($pegar_mas && ($i>0) 
                    && ((strrchr($letras_pegar_mas, $texto[$i])!==false) ||
                    (strrchr($letras_pegar_mas, $texto[$i-1])!==false))) 
                    $pegarmas = $factor_pegar_mas;
                $x += $ancho_fuente * (1 - $pegarx * $pegarmas);
                //En Y las desplazamos al azar
                $numy = mt_rand($fs1,$fs2);
                $signoy = 1; 
                if (($numy % 2)==0) $signoy = -1;               
                if ($no_cerrar && ($i>0) && 
                    (strrchr($letras_no_cerrar, $texto[$i-1])!==false)){
                    //letras anteriores que no deben ser cerradas por estas
                    //como C,c,G,q para mejorar visibilidad
                    if ($signoyant == 0) $signoyant = $signoy;
                    $signoy = -$signoyant;
                    $y = $yant + $signoy * $alto_fuente / 2;
                } else {     
                    $y = $ypos *(1 + ($signoy*$numy/$dfs));
                }
                //Las que se alejan en Y se acercan en X
                if (abs($y-$yant)>($alto_fuente / 5)){
                    $x -= $ancho_fuente*$pegarx;
                }        
                $signoyant = $signoy;
                $yant = $y;
            }
            imageChar($imagen, $tamanyo_fuente, $x, $y, $texto[$i], $color_texto);
        }
        //Filtros para deformaciones
        if ($rotar){
            //$angulo = $angulo_rotacion;
            $angulo = mt_rand($angulo_rota_min, $angulo_rota_max);
            if (($num % 2)==0) $angulo = -$angulo;
            $imagen = imagerotate($imagen, $angulo, $color_fondo);
        }
        if ($superficializar) imagefilter($imagen, IMG_FILTER_MEAN_REMOVAL);
        if ($contrastar) imagefilter($imagen, IMG_FILTER_CONTRAST, $factor_contraste);
        if ($difuminar) imagefilter($imagen, IMG_FILTER_SELECTIVE_BLUR);
        if (!$testear){
            //Abrimos un búfer para extraer imagen
            ob_start();
            imagepng($imagen);
            imagedestroy($imagen);     
            $buffer = ob_get_clean();
            $imagen_data = base64_encode($buffer);            
        } else {
            $color_nota = imagecolorallocate($imagen, 255, 0, 0);
            $car_num = (string)($ktest+1);
            $xc = -$ancho_fuente;
            for ($ic=0; $ic<strlen($car_num); $ic++){
                $xc += $ancho_fuente;
                imagechar($imagen, 5, $xc, 0, $car_num[$ic], $color_nota);
            }
            imagepng($imagen, $ruta_test."test".($ktest+1).".png");
            $info_test .= "[".($ktest+1)."] ".$texto.PHP_EOL;
        }
    }
    if ($testear){
        $fichero = fopen($ruta_test."soluciones.txt", "w");
        if ($fichero){
            fwrite($fichero, $info_test);
            fclose($fichero);
        }
        
    }
} 
?>

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
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Samday | Inicio de Sesion Como Administrador</title> 
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
<body style="background-image: url('img/FONDO.jpg');background-size: cover;background-attachment: fixed;">
<!--Encabezado-->
<header>
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
  
<!--Login-->   
<form class="formulario">
    <h1>Iniciar Sesion Como Administrador</h1>
    <div class="contenedor"> 
         <div class="input-contenedor">
             <i class="fas fa-envelope icon"></i>
             <input type="text" placeholder="Correo Electronico">
         </div>         
         <div class="input-contenedor">
             <i class="fas fa-key icon"></i>
             <input type="password" placeholder="Contraseña">
         </div>
         <div>
            <?php if (!$verificado) { 
                if (!$primera_sesion) { ?>
                    <p style="color: red">No se pudo verificar</p>
                <?php } ?>
                <form action="" method="get">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img style="align-content: center;" src="data:image/png;base64,<?php echo $imagen_data;?>" 
                    width="<?php echo ($ancho_imagen*$zoom) ;?>" 
                    height="<?php echo ($alto_imagen*$zoom); ?>"
                    alt="imagen png" style="border: blue solid 1px" />
                    <!-- fin prueba -->
                    <br/> <br>                
                    Verificación <input type="text" style="background:rgb(232, 240, 254);" name="texto-verif" 
                    size="<?php echo $num_caracteres; ?>"
                    maxlength="<?php echo $num_caracteres; ?>" value="" /> 
                    (<?php echo $num_caracteres; ?> caracteres sin espacios)<br />                
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input style="background: display:align-items: center; inline-block;background: #BF0026;color: #fff;text-decoration: none;padding: 12px 20px; " type="submit" name="envio" value="Enviar" />
                    <br>
                </form>
            <?php } ?>
         </div>
         <br><br>
         <input type="submit" value="Login" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No eres administrador?<a class="link" href="loginvista.php"> Iniciar sesion</a></p>
     </div>
</form>
<br><br><br><br><br><br><br><br>


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