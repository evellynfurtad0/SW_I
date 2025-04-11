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
    <h1>Exercício 1 - Tabela Estilizada com Cores Alternadas (FOR) </h1>
    <table>
        <tr style="background-color: blueviolet;">
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php
         for ($i=1; $i <=8 ; $i++) { 
            if($i%2==0){
                echo "<tr style='background-color: red;'>";
            }
            else{
                echo "<tr style='background-color: blue;'>";
            }

            echo "
              <td>Linha $i Coluna 1</td>
              <td>Linha $i Coluna 2</td>
              <td>Linha $i Coluna 3</td>
              <td>Linha $i Coluna 4</td>
            </tr>";
         }

        ?>
    </table>
</body>
</html>