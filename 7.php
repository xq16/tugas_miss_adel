<?php
$siswa = array(
    "satu" => "Andri",
    "dua" => "Joko",
    "tiga" => "Sukma",
    "empat" => "Rina",
);

echo $siswa["dua"]; // Joko
echo "<br>";
echo $siswa["empat"]; // Rina

$siswa = [
    "satu" => "Andri",
    "dua" => "Joko",
    "tiga" => "Sukma",
    "empat" => "Rina",
];

echo $siswa["dua"]; // Joko
echo "<br>";
echo $siswa ["empat"] // Rina

$siswa = ["satu"=>"Andri","dua"=>"Joko","tiga"=>"Sukma","empat"=>"Rina"];

echo "<pre>";
print_r($siswa);
echo "</pre>";