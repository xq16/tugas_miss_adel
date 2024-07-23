<?php
$macam2 = array(121, "Joko",44.99,"Belajar PHP",true);

echo $macam2[0]; // 121
echo "<br>";
echo $macam2[1]; // Joko
echo "<br>";
echo $macam2[2]; // 44.99
echo "<br>";
echo $macam2[3]; // Belajar PHP
echo "<br>";
echo $macam2[4]; // 1 (boolen true)
echo "<br>";

$macam2 = array(121,"Joko",44.99,"Belajar PHP");
$macam2[4] = "Duniailkom";
$macam2[5] = 212;
$macam2[6] = 3.14;

echo "<pre>";
var_dump($macam2);
echo "</pre>";

$macam2 = array(121,"Joko",44.99,"Belajar PHP");
$macam2[] = "Duniailkom";
$macam2[] = 212;
$macam2[] = 3.14;

echo "<pre>";
var_dump($macam2);
echo "</pre>";

$macam2 = array(121,"Joko",44.99,"Belajar PHP");
$macam2[10] = "Duniailkom";
$macam2[100] = 212;
$macam2[1000] = 3.14;

echo "<pre>";
var_dump($macam2);
echo "</pre>";

$macam2 = array(121,"Joko",44.99,"Belajar PHP");
$macam2[1] = "Duniailkom";
$macam2[2] = 212;

echo "<pre>";
var_dump($macam2);
echo "</pre>";

$macam2 = array(121,"Joko",44.99,"Belajar PHP");
$macam2[] = "Duniailkom";

unset($macam2[0]);
unset($macam2[2]);
unset($macam2[3]);

echo "<pre>";
var_dump($macam2);
echo "</pre>";