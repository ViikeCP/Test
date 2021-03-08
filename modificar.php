<?php
	require 'conexion.php';
	//selecciona los registros
	$id = $_GET['id'];
    $query = "SELECT * FROM `catalogo`.`computadoras` WHERE (`id` = '$id');";
    //$query = "SELECT * FROM computadoras WHERE id = '$id';";
    $resultados = mysqli_query($cnx,$query);
    mysqli_close($cnx);
    $row = $resultados->fetch_assoc()
    //$row = $resultados->fetch_array(MYSQLI_ASSOC);	
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
            <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
        </div>

        <form class="form-horizontal" method="POST" action="update.php">
            <div class="form-group">
                <label for="marca" class="col-sm-2 control-label">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba la marca" name="txtMarca" id="marca"
                        value="<?php echo $row['marca'];?>" required autofocus /><br />
                </div>
            </div>

            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

            <div class="form-group">
                <label for="proc" class="col-sm-2 control-label">Procesador</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba el procesador" name="txtProc" id="proc"
                        value="<?php echo $row['procesador'];?>" required /><br />
                </div>
            </div>

            <div class="form-group">
                <label for="ram" class="col-sm-2 control-label">Memoria RAM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Escriba la memoria RAM" name="numMemoria"
                        id="ram" value="<?php echo $row['memoriaRAM'];?>" require /> <br>
                </div>
            </div>

            <div class="form-group">
                <label for="alma" class="col-sm-2 control-label">Almacenamiento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba el almacenamiento "
                        value="<?php echo $row['almacenamiento'];?>" name="txtAlmacenamiento" id="alma" require /> <br>
                </div>
            </div>

            <div class="form-group">
                <label for="grafica" class="col-sm-2 control-label">Tarjeta Gráfica</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba la tarjeta grafica" name="txtGrafica"
                        value="<?php echo $row['tarjetaGrafica'];?>" id="grafica" require /> <br>
                </div>
            </div>

            <div for="color" class="form-group">
                <label class="col-sm-2 control-label">Color</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba el color" name="txtColor"
                        value="<?php echo $row['color'];?>" id="color" require /> <br>
                </div>
            </div>

            <div class="form-group">
                <label for="bateria" class="col-sm-2 control-label">Bateria</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba la duracion de la bateria"
                        name="txtBateria" value="<?php echo $row['bateria'];?>" id="bateria" require /> <br>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="index.php" class="btn btn-default">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </div>
        </form>
    </div>
</body>

</html>