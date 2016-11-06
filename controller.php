<?php

include 'classes/Tabela.php';

$amostras = [
	[1,3,17],
	[3,5,30],
	[5,7,45],
	[7,9,52],
	[9,11,36],
	[11,13,20],
];

$arr = [
	68,90,63,60,70,83,77,71,75,54,78,81,84,84,43,79,68,95,61,45,62,56,81,47,83,70,96,95,62,67,91,96,42,87,64
];

asort($arr);

$amostra2 = Tabela::separa_amostras($arr, 10, 40);

$tb = new Tabela($amostra2);
$tb->col1 = 'Nota';
$tb->col2 = 'Nº de candidatos';
$tabela = $tb->gera_tabela();