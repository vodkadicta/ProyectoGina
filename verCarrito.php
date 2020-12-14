<?php
session_start();
include'conexion.php';

if(isset($_SESSION['CARRITO'])){
    if(isset($_GET['id'])){
        $prod_anadido=$_SESSION['CARRITO'];
        $encontro=false;
        $numero=0;
        for($i=0;$i<count($prod_anadido);$i++){
            if($prod_anadido[$i]['Id']==$_GET['id']){
                $encontro=true;
                $numero=$i;
            }
        }
        if($encontro==true){
             $prod_anadido[$numero]['Cantidad']++;
             $_SESSION['CARRITO']=$prod_anadido;
            
            
        }else{
               $nombre="";
               $precio=0;
               $imagen="";
               $sql = 'select * from productos where id='.$_GET['id'];
               $resultado = $conexion-> query($sql);
               while($r = $resultado -> fetch_assoc()){
                   $nombre=$r['nombre'];
                   $precio=$r['precio'];
                   $imagen=$r['imagen'];
               }

            $otro_prod=array('Id'=>$_GET['id'],
                                    'Nombre'=>$nombre,
                                    'Precio'=>$precio,
                                    'Imagen'=>$imagen,
                                    'Cantidad'=>1);
            array_push($prod_anadido,$otro_prod);
            $_SESSION['CARRITO']=$prod_anadido;
        }
      $_GET['id']=null;  
}
    
}else{
    if(isset($_GET['id'])){
           $nombre="";
           $precio=0;
           $imagen="";
           $sql = 'select * from productos where id='.$_GET['id'];
           $resultado = $conexion-> query($sql);
           while($r = $resultado -> fetch_assoc()){
               $imagen=$r['imagen'];
               $nombre=$r['nombre'];
               $precio=$r['precio'];
               
           }
            $prod_anadido[]=array('Id'=>$_GET['id'],
                                'Nombre'=>$nombre,
                                'Precio'=>$precio,
                                'Imagen'=>$imagen,
                                'Cantidad'=>1);
           $_SESSION['CARRITO']=$prod_anadido;
 }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Carrito</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/cde73739cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilo_icon.css">
</head>
<body>
   <nav>
    <ul>
        <li class="carrito">
            <a href="index.php" title="Volver al Catalogo"><i class="fas fa-store" style="font-size:35px"></i></a>
        </li>
    </ul>
</nav>
    <br>
<a href="index.php"><i class="fas fa-angle-double-left" style="font-size: 25px;">TIENDA</i></a>
<center>
   
 <table class="tablaCarrito">
 <thead>
     <tr>
         <th>PRODUCTO</th>
         <th>DESCRIPCION</th>
         <th>PRECIO</th>
         <th>CANTIDAD</th>
         <th>SUBTOTAL</th>
         <th></th>
     </tr>
 </thead>
     <tbody>
        <?php
        $total=0;
        if(isset($_SESSION['CARRITO'])){
            $datos=$_SESSION['CARRITO'];
            $total=0;
             for($i=0;$i<count($datos);$i++){
    ?>
         <tr>
             <td> <!--IMAGEN DEL PRODUCTO-->
                    <img class="img-fluid" width="100" height="100" src="images/<?php echo $datos[$i]['Imagen']; ?>"><br>
                    
             </td>
             <td><!--NOMBRE PROD-->
                    <p style="height:30px;"><?php echo $datos[$i]['Nombre']; ?></p>
             </td>
             <td><!--PRECIO PROD-->
                    <p>Precio: <br>$<?php echo $datos[$i]['Precio']; ?></p>
                    
             </td>
             <td><!--CANTIDAD PROD-->
                    <p for="cantidad">Cantidad: <br><?php echo $datos[$i]['Cantidad'] ?></p>
             </td>
             <td><!--SUBTOTAL PROD-->                   
                    <p class="cant<?php echo $datos[$i]['Id']; ?>">Subtotal: <br>$<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio']; ?></p>
                    
             </td>
             <td><!--BOTON ELIMINAR-->
                    <button><a href="eliminarCarrito.php?id=<?php echo $datos[$i]['Id']; ?>">Eliminar</a>
                    </button>
                                        
             </td>  
         </tr>
         <?php
                 $total= ($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
            }
            }else{
        ?>
         <tr>
             <td colspan="6">NO HAY PRODUCTOS EN EL CARRITO</td>
         </tr>
         
         <?php
         }
         
         echo '<center><h2>Total a pagar: $ '.$total.'</h2></center>';
         if($total!=0){
             echo '<center><button class="comprar"><a href="compras/compras.php">Finalizar Compra</a></button></center>';
         }
         ?>
         
     </tbody>
     
</table>
</center>
</body>
</html>
