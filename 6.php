<?php
$koordinat = array(
    array(8,2),
    array(2,4),
    array(1,7)
);
echo $koordinat[0][0]; // 8
echo"<br>";
echo $koordinat[0][1]; // 2
echo"<br>";
echo $koordinat[2][1]; // 7
echo"<br>";

$koordinat = [[8,2],[2,4],[1,7]];

echo $koordinat[0][0]; // 8
echo"<br>";
echo $koordinat[0][1]; // 2
echo"<br>";
echo $koordinat[2][1]; // 7
echo"<br>";

$koordinat = [[8,2],[2,4],[1,7]];

echo "<pre>";
print_r($koordinat);
echo "</pre>"

$koordinat = [
    [
        ["A"],[B]
    ],
    [
        ["C"],["D"]
    ],
];

echo $koordinat[0][0][0]; // A
echo"<br>";
echo $koordinat[0][1][0]; // B
echo"<br>";
echo $koordinat[1][0][0]; // C
echo"<br>";
echo $koordinat[1][1][0]; // D
echo"<br>";