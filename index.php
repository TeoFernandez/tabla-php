<?php
$conexion = mysqli_connect('localhost', 'root', '', 'kiosco', '3307');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <td>ncli</td>
            <td>raso</td>
        </tr>

        <?php
        $sql = "SELECT * FROM clientes";
        $result = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($result)) {
        ?> 
        <tr>
            <td><?php echo $mostrar['ncli'] ?></td>
            <td><?php echo $mostrar['raso'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>
