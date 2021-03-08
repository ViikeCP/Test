<?php        
        require 'conexion.php';    
        //declaro la variable para enviar los datos
        if(isset ($_GET["id"])){
        $id = $_GET['id'];
        $query = "DELETE FROM `catalogo`.`computadoras` WHERE (`id` = '$id');";
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
                <h3>REGISTRO ELIMINADDO</h3>
                <?php } else { ?>
                <h3>ERROR AL ELIMINAR</h3>
                <?php } ?>
                <a href="index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html>