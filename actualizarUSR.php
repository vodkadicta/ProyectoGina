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
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
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
                    <div class="col-sm-8"><h2>Editar <b>Cliente</b></h2></div>
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
                    $cuenta = $DB->sanitize($_POST['cuenta']);
                    $mail = $DB->sanitize($_POST['mail']);
                    $contra = $DB->sanitize($_POST['contra']);
                    $bloqueo = $DB->sanitize($_POST['block']);
					$res = $DB->updateUsers($nombre, $cuenta,$mail, $contra, $bloqueo,$id);
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
				$datos_cliente=$DB->single_recordUsers($id);
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->Nombre;?>">
				</div>
				<div class="col-md-6">
					<label>Cuenta:</label>
                    <input type="text" name="cuenta" id="cuenta" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->cuenta;?>">
                </div>
                <div class="col-md-6">
					<label>Correo Eletronico:</label>
					<input type="email" name="mail" id="mail" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->mail;?>">
				</div>
				<div class="col-md-12">
					<label>contraseña:</label>
					<input type="text" name="contra" id="contra" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->contra;?>">
				</div>
				<div class="col-md-6">
					<label>bloqueo:</label>
					<input type="number" name="block" id="block" class='form-control' maxlength="1" required value="<?php echo $datos_cliente->bloqueo;?>">
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