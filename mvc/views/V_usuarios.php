<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">Listado de Usuarios</h1>
    <table class="table">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Password</td>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($usuarios as $usser) {
                echo "<tr>";
                echo "<td>" . $usser['nombre'] . "</td>";
                echo "<td>" . $usser['contra'] . "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>


</body>

</html>