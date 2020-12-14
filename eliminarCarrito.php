<?php
session_start();
error_reporting(E_ALL);
@ini_set('display_errors', '1');
//con session_start() creamos la sesión si no existe o la retomamos si ya
//ha sido creada.
extract($_REQUEST);
//Como antes, usamos extract() por comodidad, pero podemos no hacerlo
//tranquilamente.
$id=$_GET['id'];
$carro=$_SESSION['CARRITO'];
//Asignamos a la variable $carro los valores guardados en la sessión
for($i=0;$i<count($carro);$i++){
    if($carro[$i]['Id']==$id){
        unset($carro[$i]);
    }
}

//la función unset borra el elemento de un array que le pasemos por parámetro.
//En este caso la usamos para borrar el elemento cuyo id le pasemos a la
//página por la url.
$_SESSION['CARRITO']=$carro;
//Finalmente, actualizamos la sessión, como hicimos cuando agregamos un
//producto y volvemos al catálogo.
header("Location:verCarrito.php");
?>