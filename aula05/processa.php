<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == "etec@gmail.com" && $senha == "1234"){
    //SEGUE PARA PAGINA privada.php
    $nome = "Aluno";
    header('Location: privada.php?nome='.$nome);
} else{
    //SEGUE PARA A PÁGINA erro.php
    header('Location: erro.php');
}

?>