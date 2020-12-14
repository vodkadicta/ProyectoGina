<?php
//establecemos la conexion con la base de datos

include 'conexion.php';
$sql = 'select * from productos';
$resultado = $conexion-> query($sql);

?>
<!--link bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!--link estilos-->
<link rel="stylesheet" href="./css/estilos.css">

<!--link FONTAWESOME-->
<script src="https://kit.fontawesome.com/cde73739cb.js" crossorigin="anonymous"></script>

<!--encabezado-->
<nav>
    <ul>
        <li class="carrito">
           <a href="verCarrito.php" title="Ver tu Carrito de Compras"><i class="fas fa-shopping-cart" style="font-size:35px"></i></a>
        </li>
    </ul>
</nav>

<!--muestra cada articulo-->
<div class="container"> <br><br>
    <div class="row">
        <?php
        $numPro=0; //nos ayudara a saber el lugar 
              //del arreglo donde se encuentra.
        
        ?>
        
        <script> var array=[]; </script>
        
        <?php
        //guardamos lo obtenido de la base de datos en un arreglo
        while($fila = $resultado -> fetch_assoc()){
            $imagen = $fila['imagen'];
            $nombre = $fila['nombre'];
            $descripcion= $fila['descripcion'];
            $precio = $fila['precio'];
            ?>
            
            <!--almacenamos los nombres en un arreglo-->
            <script>
                array.push("<?php echo $nombre ?>");
        </script>
        <div class="col-md-3 col-sm-6 tarjetita">
          <!--IMAGEN DEL PRODUCTO-->
          <div style="height:250; background-color:white;">
           <a href="detalles.php?id=<?php echo $fila['id'] ?>">
               <img class="img-fluid" width="250" height="250" src="images/<?php echo $imagen ?>" title="Ver detalles del producto">
           </a>
           </div>
           
           <!--NOMBRE PROD-->
            <p style="height:30px;"><?php echo $nombre ?></p>
            
            <!--PRECIO PROD-->
            <p style="height:20px;">$ <?php echo $precio ?></p>
            
            <!--BOTON AGREGAR-->
            <button id="<?php echo $numPro; ?>" class="btnAgregar"><a href="verCarrito.php?id=<?php echo $fila['id']; ?>">Agregar al carrito</a>
            </button>
        </div>
   
               
        <?php } ?>
        
