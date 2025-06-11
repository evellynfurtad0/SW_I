<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Godofredo",5,7);

    $nota1 = $fulano->getNota1();  
    $nota2 = $fulano->getNota2();
    $nome = $fulano->getNome();
    //echo $nota2; exibe nota 2 no navegador

    $media = $fulano-> CalculaMedia($nota1,$nota2);
    
    $fulano->VerificarSituacao($media);
    echo "ALUNO: $nome <br>";
    echo "MÉDIA: $media <br>";
    echo "SITUAÇÃO:". $fulano->VerificarSituacao($media);
?>