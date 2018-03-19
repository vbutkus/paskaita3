<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Multiplication table</title>
</head>
<body>
<!--Daugybos lentele-->
<table>
    <?php
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";
        for ($column = 1; $column <= 10; $column++) {
            echo "<td>";
            echo $row. " x ". $column. " = ". $row * $column;
        }
        echo "</td>";
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>