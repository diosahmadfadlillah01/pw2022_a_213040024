<?php
// Menghitung total 2 kubus
function totalLuasDuakubus($a, $b)
{
    $luas_a = pow($a, 3);
    $luas_b = pow($b, 3);

    $total = $luas_a + $luas_b;

    return "Total luar dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}

echo totalLuasDuaKubus(9, 4);
echo "<br>";
echo totalLuasDuaKubus(10, 15);
echo "<br>";
echo totalLuasDuaKubus(100, 200);