<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crear nuevo usuario</title>
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
                    <div class="col-sm-8"><h2>Agregar <b>Cliente</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				include ("base_de_datos.php");
				$DB= new Database();
				if(isset($_POST) && !empty($_POST)){
                    $id = $DB->sanitize($_POST['id']);
					$nombre = $DB->sanitize($_POST['nombre']);
					$cuenta = $DB->sanitize($_POST['cuenta']);
					$contra = $DB->sanitize($_POST['contra']);
					$mail = $DB->sanitize($_POST['mail']);
					$res = $DB->createUsers($id,$nombre,$cuenta,$mail,$contra);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
					}else{
						$message="No se pudieron insertar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>
			<div class="row">
				<form method="post">
                <div class="col-md-6">
					<label>ID:</label>
					<input type="number" name="id" id="id" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required >
                </div>
                <div class="col-md-6">
					<label>cuenta:</label>
					<input type="number" name="cuenta" id="cuenta" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Correo Eletronico:</label>
					<input type="email" name="mail" id="mail" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Contrasenia:</label>
					<input type="text" name="contra" id="contra" class='form-control' maxlength="100" required >
				</div>		
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>