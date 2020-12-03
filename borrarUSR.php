<?php 
if (isset($_GET['id'])){
	include('base_de_datos.php');
	$DB = new Database();
	$id=intval($_GET['id']);
	$res = $DB->deleteUsers($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>