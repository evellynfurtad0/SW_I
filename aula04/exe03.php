<?php
$login = $_POST['cxlogin'];
$senha = $_POST['cxsenha'];
if ($login == "etec" && $senha == "informatica")
{
  echo"Logado com sucesso!";
}
else{
    echo"Login ou senha incorreto";
}
?>