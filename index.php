<?php
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
	require 'conexion.php';
    //query del select si no se ingresa nada, muestra todos los registros
	$where = "";
	
	if(!empty($_POST)){

		$valor = $_POST["campo"];
		if(!empty($valor)){
			
			//$where = "WHERE (`marca` = '$valor');";
			$where ="WHERE (`id` = '$valor');";
	}
}
    $query = "SELECT * FROM `catalogo`.`computadoras` $where";
    $resultados = mysqli_query($cnx,$query);
    mysqli_close($cnx);	
?>

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 style="text-align:center">Catálogo de Computadoras</h2>
        </div>

        <div class="row">
            <a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
            <br>
            <br>
            <!--Buscar el producto con el ID -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <b>Ingresa ID: </b><input type="number" id="campo" name="campo" />
                <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
            </form>
        </div>

        <br>
        <div class="row table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Procesador</th>
                        <th>Memoria RAM "GB"</th>
                        <th>Almacenamiento</th>
                        <th>Tarjeta Gráfica</th>
                        <th>Color</th>
                        <th>Bateria</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if($resultados){
						while($row = $resultados->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['marca']; ?></td>
                        <td><?php echo $row['procesador']; ?></td>
                        <td><?php echo $row['memoriaRAM']; ?></td>
                        <td><?php echo $row['almacenamiento']; ?></td>
                        <td><?php echo $row['tarjetaGrafica']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                        <td><?php echo $row['bateria']; ?></td>
                        <td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span
                                    class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal"
                                data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>

                    <?php } ?>
                    <?php }else {?>
                    <?php 
						echo "error";
						?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
                </div>

                <div class="modal-body">
                    ¿Desea eliminar este registro?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
    </script>
</body>

</html>