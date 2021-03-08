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
            <h3 style="text-align:center">NUEVO REGISTRO</h3>
        </div>

        <form class="form-horizontal" method="POST" action="guardar.php">
            <div class="form-group">
                <label class="col-sm-2 control-label">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba la marca" name="txtMarca" id="marca"
                        required autofocus /><br />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Procesador</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba el procesador" name="txtProc" id="proc"
                        required /><br />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Memoria RAM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Escriba la memoria RAM" name="numMemoria"
                        id="ram" require /> <br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Almacenamiento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba el almacenamiento"
                        name="txtAlmacenamiento" id="alma" require /> <br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tarjeta Gráfica</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba la tarjeta grafica" name="txtGrafica"
                        id="grafica" require /> <br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Color</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba el color" name="txtColor" id="color"
                        require /> <br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Bateria</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escriba la duracion de la bateria"
                        name="txtBateria" id="bateria" require /> <br>
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