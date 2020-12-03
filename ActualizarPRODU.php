<?php
	if (isset($_GET['id'])){
        $id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actualizar producto</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Editar <b>Producto</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				
				include ("base_de_datos.php");
				$DB= new Database();
				if(isset($_POST) && !empty($_POST)){
					$nombre = $DB->sanitize($_POST['nombre']);
					$categoria = $DB->sanitize($_POST['categoria']);
					$descrip = $DB->sanitize($_POST['descrip']);
                    $exist = $DB->sanitize($_POST['existencia']);
                    $precio = $DB->sanitize($_POST['precio']);
                    $imagen = $DB->sanitize($_POST['imagen']);
					$res = $DB->updateProd($id,$nombre,$categoria,$descrip,$exist,$precio,$imagen);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_cliente=$DB->single_recordProd($id);
			?>
			<div class="row">
				<form method="post">
                <div class="col-md-6">
					<label>ID:</label>
					<input type="number" name="id" id="id" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->idProducto;?>" >
				</div>
				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->nombre;?>">
                </div>
                <div class="col-md-6">
					<label>Categoria:</label>
					<input type="text" name="categoria" id="categoria" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->categoria;?>">
				</div>
				<div class="col-md-12">
					<label>Descripcion:</label>
					<textarea  name="descrip" id="descrip" class='form-control' maxlength="255" required><?php echo $datos_cliente->descrip;?></textarea>
				</div>
				<div class="col-md-6">
					<label>Existencia:</label>
					<input type="number" name="existencia" id="existencia" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->existencia;?>">
                </div>
                <div class="col-md-6">
					<label>Precio:</label>
					<input type="number" name="precio" id="precio" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->precio;?>">
                </div>
                <div class="col-md-6">
					<label>Imagen:</label>
					<input type="file" name="imagen" id="imagen" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->imagen;?>">
				</div>		
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>