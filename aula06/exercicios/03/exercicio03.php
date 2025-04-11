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

        .Frito {
            background-color: rgb(0, 207, 162);
        }

        .Assado {
            background-color: rgb(0, 175, 228);
        }

        .Bebida {
            background-color: rgb(2, 118, 226);
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th style="background-color:rgb(0, 66, 207);">Nome</th>
            <th style="background-color:rgb(0, 66, 207);">(R$) Valor</th>
            <th style="background-color:rgb(0, 66, 207);">Categorias</th>
        </tr>

        <?php
        $arrayProdutos = [
            ["Nome" => "Coxinha", "Valor" => 6, "Categoria" => "Frito"],
            ["Nome" => "Risole", "Valor" => 7, "Categoria" => "Frito"],
            ["Nome" => "Pastel", "Valor" => 7, "Categoria" => "Assado"],
            ["Nome" => "Empada", "Valor" => 8, "Categoria" => "Assado"],
            ["Nome" => "Sucos", "Valor" => 9, "Categoria" => "Bebida"]
        ];

        foreach ($arrayProdutos as $produtos) {
            $linha = $produtos["Categoria"];

            echo "<tr class='$linha'>
                <td>{$produtos['Nome']}</td>
                <td>{$produtos['Valor']}</td>
                <td>{$produtos['Categoria']}</td>
              </tr>";
        }
        ?>
    </table>
</body>

</html>