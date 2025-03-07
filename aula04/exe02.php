<?php
$n1 = $_GET['cxnum1'];
$n2 = $_GET['cxnum2'];
$n3 = $_GET['cxnum3'];
if ($n1 > $n2 && $n1 > $n3){
  echo "O maior número é ".$n1."!";
}
else if ($n2 > $n1 && $n2 > $n3){
    echo "O maior número é ".$n2."!";
}
else if ($n3 > $n1 && $n3 > $n2){
    echo "O maior número é ".$n3."!";
}
else{
    echo "Os números são iguais!";
}
?>