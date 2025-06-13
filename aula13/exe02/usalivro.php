<?php
  include_once 'Livro.class.php';

  $livro = new Livro('Iracema','José de Alencar', true);
 
  echo "STATUS DO LIVRO:";
  echo $livro->ExibirStatus();
  echo "<hr>";

  echo "foi feito um empréstimo";
  $livro->Emprestar();
  echo "<hr>";

  echo "STATUS DO LIVRO:";
  echo $livro->ExibirStatus();
  echo "<hr>";

  echo "foi feito um empréstimo";
  $livro->Emprestar();
  echo "<hr>";

  echo"Efetuando uma devolução";
  $livro->Devolver();
  echo"<hr>"


//   var_dump($livro); mostra os dados maior
// print_r($livro); mostra os dados em número

//   print_r($livro);
//   echo"</pre>"  ajusta para melhor visualização do codigo
?>