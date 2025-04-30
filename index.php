<?php
$conexion = mysqli_connect('localhost', 'root', '', 'kiosco', '3307');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <center><h1>Ventas del kiosco</h1></center>
<br>
    <center>
    <table border="2">
        <tr>
            <td>Cliente</td>
            <td>%</td>
            <td>Cantidad de Ventas</td>
            <td>Cantidad de Devoluciones</td>
        </tr>

        <?php
        $sql = "SELECT * FROM porcentaje_ventas";
        $result = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($result)) {
        ?> 
        <tr>
            <td><?php echo $mostrar['Cliente'] ?></td>
            <td><?php echo $mostrar['%'] ?></td>
            <td><?php echo $mostrar['Cantidad de Ventas'] ?></td>
            <td><?php echo $mostrar['Cantidad de Devoluciones'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
    <br>

    <h2><u>Estadistica por MES:</u></h2>
    
    <br>
    <center>
    <table border="2">
        <tr>
            <td>Meses</td>
            <td>Ventas</td>

        </tr>

        <?php
        $sql = "SELECT * FROM ventas_x_mes";
        $result = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($result)) {
        ?> 
        <tr>
            <td><?php echo $mostrar['meses'] ?></td>
            <td><?php echo $mostrar['ventas'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
</body>
</html>
