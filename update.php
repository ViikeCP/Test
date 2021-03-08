<?php        

        require 'conexion.php';    
        //declaro variables para enviar los datos
        if(isset ($_POST["id"])){
        $id = $_POST['id'];
        $marca = $_POST['txtMarca']; //txtMarca es el name de cada campo en el form   
        $procesador = $_POST["txtProc"];
        $memoria = $_POST["numMemoria"];
        $almacenamiento = $_POST["txtAlmacenamiento"];
        $tarjetaGrafica = $_POST["txtGrafica"];
        $color = $_POST["txtColor"];
        $bateria = $_POST["txtBateria"];
        
        //insertar datos a la bd; marca,procesador... son campos de la bd
        $query = "UPDATE `catalogo`.`computadoras` SET `marca` = '$marca', `procesador` = '$procesador', `memoriaRAM` = '$memoria',`almacenamiento` = '$almacenamiento',
        `tarjetaGrafica` = '$tarjetaGrafica',`color` = '$color',`bateria` = '$bateria' WHERE (`id` = '$id');";
        //$query = "UPDATE catalogo.computadoras SET marca = '$marca', procesador = '$procesador',memoriaRAM = '$memoria', almacenamiento = '$almacenamiento',
         //tajetaGrafica = '$tarjetaGrafica', color = '$color', bateria = '$bateria' WHERE id ='$id';";
        $resultados = mysqli_query($cnx,$query); 
        mysqli_close($cnx);
        }else{
            echo "no";
        }   
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
                <?php if(isset($resultados)) { ?>
                <script>
                alert("Registro  modificado");
                </script>
                <a href="index.php" class="btn btn-primary">Regresar</a>
                <?php } else { ?>
                <script>
                alert("Registro no modificado");
                </script>
                <a href="index.php" class="btn btn-primary">Regresar</a>
                <?php } ?>
            </div>
        </div>
    </div>

</body>
<!--Ya pude hacer commits -->

</html>