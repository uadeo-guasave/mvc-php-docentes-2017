<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuarios</title>
</head>
<body>
    <!-- table>(thead>tr>th*5)+tbody -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($usuarios as $usuario) {
            echo '<tr>';
            echo "<td>$usuario->id</td>";
            echo "<td>$usuario->name</td>";
            echo "<td>$usuario->firstname</td>";
            echo "<td>$usuario->lastname</td>";
            echo "<td>$usuario->email</td>";
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</body>
</html>