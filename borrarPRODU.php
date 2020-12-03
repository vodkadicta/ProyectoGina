<?php 
if (isset($_GET['id'])){
	include('base_de_datos.php');
	$DB = new Database();
    $id=intval($_GET['id']);
    echo $id;
	$res = $DB->deleteProd($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>