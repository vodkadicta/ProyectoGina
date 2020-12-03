<?php
include('base_de_datos.php');
$DB = new Database();
$lista = $DB->readUsers();
$catalogo=$DB->readProd();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>





    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Listado de <b>Usuarios</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="crearUSR.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Usuario</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cuenta</th>
                        <th>Correo</th>
                        <th>contrasenia</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>
                <?php
                while ($row = mysqli_fetch_object($lista)) {
                    $id = $row->idUsuario;
                    $nombre = $row->Nombre;
                    $cuenta = $row->cuenta;
                    $contra = $row->contra;
                    $mail = $row->mail;
                    $status = $row->bloqueo;
                ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $cuenta; ?></td>
                        <td><?php echo $mail; ?></td>
                        <td><?php echo $contra; ?></td>
                        <td><?php echo $status; ?></td>
                        <td>
                            <a href="actualizarUSR.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="borrarUSR.php?id=<?php echo $id; ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Listado de <b>Produtos</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="crearPRODU.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Producto</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th>Existencia</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>
                <?php
                while ($row2 = mysqli_fetch_object($catalogo)) {
                    $idp = $row2->idProducto;
                    $nombrep = $row2->nombre;
                    $categoria = $row2->categoria;
                    $descrip = $row2->descrip;
                    $exist = $row2->existencia;
                    $precio = $row2->precio;
                    $imagen = $row2->imagen;
                ?>
                    <tr>
                        <td><?php echo $idp; ?></td>
                        <td><?php echo $nombrep; ?></td>
                        <td><?php echo $categoria; ?></td>
                        <td><?php echo $descrip; ?></td>
                        <td><?php echo $exist; ?></td>
                        <td><?php echo $precio; ?></td>
                        <td><?php echo $imagen; ?></td>
                        <td>
                            <a href="actualizarPRODU.php?id=<?php echo $idp;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="borrarPRODU.php?id=<?php echo $idp;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>