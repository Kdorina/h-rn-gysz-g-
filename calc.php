<?php

echo file_get_contents('templates/head.html');

$page = file_get_contents('templates/calc.html');

$aSide = $_GET['aSide'];
$bSide = $_GET['bSide'];
$cSide = $_GET['cSide'];
$dSide = $_GET['dSide'];

function calcArea($aSide, $bSide, $cSide, $dSide){
$s = ($aSide+$bSide+$cSide+$dSide)/2;
$area = sqrt(
    ($s-$aSide)*
    ($s-$bSide)*
    ($s-$cSide)*
    ($s-$dSide)
);
return $area;
}
$area = calcArea($aSide, $bSide, $cSide, $dSide);

$page = str_replace('{{ result }}' , $area, $page);

echo $page;
echo file_get_contents('templates/foot.html');
