<?php
$hasil = (true and false);
var_dump($hasil); echo "<br />"; //booL(false)

$hasil = (true or false);
var_dump($hasil); echo "<br />"; //booL(true)

$hasil = (true or false);
var_dump($hasil); echo "<br />"; //booL(true)

$hasil = false;
var_dump(!$hasil); echo "<br />"; //booL(true)

$hasil = (false or true && false);
var_dump($hasil); echo "<br />"; //booL(false)

$hasil = ('duniailkom' and true);
var_dump($hasil); echo "<br />"; //booL(true)

$hasil = ('000' or false);
var_dump($hasil);               //booL(true)