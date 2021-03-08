<?php        
        require 'conexion.php';    
        //declaro variables para enviar los datos
        $marca = $_POST["txtMarca"]; //txtMarca es el name de cada campo en el form   
        $procesador = $_POST["txtProc"];
        $memoria = $_POST["numMemoria"];
        $almacenamiento = $_POST["txtAlmacenamiento"];
        $tarjetaGrafica = $_POST["txtGrafica"];
        $color = $_POST["txtColor"];
        $bateria = $_POST["txtBateria"];

        //insertar datos a la bd; marca,procesador... son campos de la bd
        $query = "INSERT INTO catalogo.computadoras(marca,procesador,memoriaRAM,almacenamiento,tarjetaGrafica,color,bateria) VALUES(' $marca',' $procesador','$memoria','$almacenamiento','$tarjetaGrafica','$color','$bateria');";
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
            <div class="row" style="text-align:center">
                <?php if($resultados) { ?>
                <h3>REGISTRO GUARDADO</h3>
                <?php } else { ?>
                <h3>ERROR AL GUARDAR</h3>
                <?php } ?>
                <a href="index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html>