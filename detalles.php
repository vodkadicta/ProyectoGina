<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="./css/estilos.css">
<!--link FONTAWESOME-->
<script src="https://kit.fontawesome.com/cde73739cb.js" crossorigin="anonymous"></script>
</head>
<body>
<nav>
    <ul>
        <li class="carrito">
           <a href="index.php" title="Volver al Catalogo"><i class="fas fa-store" style="font-size:35px"></i></a>
        </li>
    </ul>
</nav>

<div class="container"> <br><br>
    <div class="row">
        <?php
        include 'conexion.php';
        $sql = 'select * from productos where id='.$_GET['id'];
        $resultado = $conexion-> query($sql);
        
        while($fila = $resultado -> fetch_assoc()){
            $imagen = $fila['imagen'];
            $nombre = $fila['nombre'];
            $descripcion= $fila['descripcion'];
            $precio = $fila['precio'];
            ?>
            
            <script>
                array.push("<?php echo $nombre ?>");
        </script>
        <div class="detalles">
           <a href="#">
               <img class="img-fluid" width="650" height="650" src="images/<?php echo $imagen ?>">
           </a>
           <div class="info">
            <p style="height:20px;"><?php echo $nombre ?></p><br>
            <p style="height:10px;">$ <?php echo $precio ?></p>
            <p style="text-align:center">Descripcion: <?php echo $descripcion ?></p>
            <button id="<?php echo $numPro ?>" class="btnAgregar"><a href="verCarrito.php?id=<?php echo $fila['id']; ?>">Agregar al carrito</a>
            </button><br><br><br>
            <a href="verCarrito.php" title="Ver tu Carrito de Compras" style="float: right;"><img src="images/carritoIcon.jpg" alt=""></a>
            </div>
        </div>
   
               
        <?php
          
                }
        ?>
    
