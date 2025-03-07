<?php
$nome = $_GET['cxnome'];
$n1 = $_GET['cxnum1'];
$n2 = $_GET['cxnum2'];
$n3 = $_GET['cxnum3'];
$media= ($n1+$n2+$n3)/3;
echo "Olá, ".$nome."!";
echo " A sua média é " .$media."!";
?>