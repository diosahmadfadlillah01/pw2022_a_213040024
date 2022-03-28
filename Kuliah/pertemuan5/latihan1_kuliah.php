<?php
// ARRAY
// Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Desember";



// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]; // cara baru
$bulan = array("Januari", "Februari", "Maret", "April", "Mei"); //cara lama
$myArray = [100, "Gilang", true];

// Mencetak Array
//mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// mencetak semua elemen pada Array
// var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak menggunakan Looping
//for
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach (Khusus untuk Array)
foreach ($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";

foreach ($hari as $a => $b) {
    echo "Key: $a, value: $b";
    echo "<br>";
}
echo "<hr>";

//Memanipulasi isi Array
//Menambah elemen baru di akhir Array
$hari[] = "Sabtu";
$hari[] = "Minggu";
var_dump($hari);
?>

<div style="height:1000px"></div>