<!DOCTYPE html>
<html>
<head>
<title>Samday | Juego </title>
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
<style>

div#memory_board{
	width:300px;
	height:300px;
	padding:24px;
	margin:0px auto;
}
div#memory_board > div{
	background: url(tile_bg.jpg) no-repeat;
	border:#000 1px solid;
	width:71px;
	height:71px;
	float:left;
	margin:10px;
	padding:20px;
	font-size:14px;
	cursor:pointer;
	text-align:center;
}
</style>
<script>
var memory_array = ['Collar','Collar','Arete','Arete','Tenis','Tenis','Vestido','Vestido'];
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;
Array.prototype.memory_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
function newBoard(){
	tiles_flipped = 0;
	var output = '';
    memory_array.memory_tile_shuffle();
	for(var i = 0; i < memory_array.length; i++){
		output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
	}
	document.getElementById('memory_board').innerHTML = output;
}
function memoryFlipTile(tile,val){
	if(tile.innerHTML == "" && memory_values.length < 2){
		tile.style.background = '#FFF';
		tile.innerHTML = val;
		if(memory_values.length == 0){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
		} else if(memory_values.length == 1){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
			if(memory_values[0] == memory_values[1]){
				tiles_flipped += 2;
				memory_values = [];
            	memory_tile_ids = [];
				if(tiles_flipped == memory_array.length){
                    window.close('juego.php');
                    window.open("indexx3.php");
					tile_1.style.background = 'url(imgAlert/Felices.png) no-repeat';
					document.getElementById('memory_board').innerHTML = "";
					newBoard();
				}
			} else {
				function flip2Back(){
				    var tile_1 = document.getElementById(memory_tile_ids[0]);
				    var tile_2 = document.getElementById(memory_tile_ids[1]);
				    tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
            	    tile_1.innerHTML = "";
				    tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
            	    tile_2.innerHTML = "";
				    memory_values = [];
            	    memory_tile_ids = [];
				}
				setTimeout(flip2Back, 700);
			}
		}
	}
}

</script>
</head>
<body style="background: rgba(232, 63, 0, 0.8);">
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
<br><br><br><br><br><br><br>
<h3 class="samday" style="font-family:sans-serif;color:white;"><strong>JUEGO DE MEMORAMA</strong></h3>
<h3 class="samday" style="font-family:sans-serif;color:white;"><strong>Gana y consigue un cupon</strong></h3>
<div id="memory_board"></div>
<script>newBoard();</script>

<br><br><br><br><br><br><br>
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