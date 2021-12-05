<!DOCTYPE html>
<html>
<head>
	<title>Calcule o preço do seu Software!</title>
</head>
<body>

	<header> Qual é o preço do seu sofware? </header>
	<br>
	<p> Confira abaixo o resultado:</p>

	<br>

<?php

$linhas = $_POST ['linhas'];
$baixa = $_POST ['baixa'];
$media =$_POST ['media'];
$alta = $_POST ['alta'];
$horas = $_POST ['horas'];
$valor = $_POST ['valor'];
$entrega = $_POST ['entrega'];

$calculoLinha = $linhas * 0.50;
$calculoBaixa = $baixa * 100.0;
$calculoMedia = $media * 300.0;
$calculoAlta = $alta * 600.0;
$calculoHoras = $horas * $valor;
$calculoEntrega = $entrega * $calculoHoras;

$somaTotal = $calculoLinha + $calculoBaixa + $calculoMedia + $calculoAlta + $calculoEntrega;

echo "A soma total é: $somaTotal";

?>

</body>
</html>

