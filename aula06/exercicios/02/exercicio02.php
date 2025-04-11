<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $coluna = $_POST['cxcoluna'];
        $linha = $_POST['cxlinha'];
        $a = 1;
        while ($a <= $linha) {
            echo "<tr>";
            $i = 1;
            while ($i <= $coluna) {
                echo "<td>Linha $a, Coluna $i</td>";
                $i++;
            }
            echo "</tr>";
            $a++;
        }
        ?>
    </table>
</body>

</html>