<?php
function tambah($satu,$dua){
    $hasil = $satu +$dua;
    return $hasil;
}
$a = tambah(6,20);
$b = tambah($a,9);
echo $b;
?>