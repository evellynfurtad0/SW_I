<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'evellyn@gmail.com' && $senha == '1234') {
       $nome = "Aluno";
       header('Location: privada.php?nome='.$nome);
    }
    else{
       header('Location: erro.php');
    }
?>