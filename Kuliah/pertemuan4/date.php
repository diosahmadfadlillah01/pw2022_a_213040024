<?php
// FUNCTION,

// Built-in Function
// date();
echo date("l, j, F Y");
echo "<hr>";

// time()
echo time();
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j, F Y", time() - +60 * 60 * 24 * 100);
echo "<hr>";

// mktime (0,0,0,0,0,0);
// Mendapatkan detik pada tanggal tertentu
// jam,menit,detik,bulan,tanggal,tahun
echo mktime(0, 0, 0, 3, 5, 2002);
echo "<hr>";
echo date("l", mktime(0, 0, 0, 11, 10, 2002));
echo "<hr>";

// strtotime
echo date("l", strtotime("25 aug 1985"));
echo "<hr>";

// STRING
// strlen(); untuk menghitung panjang sebuah string
// strcmp(); untuk membandingkan 2 buah string
// explode(); untuk memecah sebuah string menjadi array
// htmlspecialchars(); 

// UTILITY
// var_dump(); Untuk mencetak isi dari sebuah variabel
// isset(); akan menghasilkan nilai boolean
// empty(); mengecek sebuah variabel kosong atau tidak
// die(); untuk memberhentikan program
// sleep(); untuk memberhentikan sementara

//MATH 
//echo pow(2, 3); //pangkat
//echo "<br>";
//echo rand(1, 100);
//echo "<br>";
//pembulatan
// round(), ceil(), floor();
//echo round(2.9); // terdekat
//echo "<br>";
//echo ceil(2.1); // ke atas (celling / langit2)
//echo "<br>";
//echo floor(2.9); // ke bawah (lantai)
//echo "<hr>";

//User Definited Function
// Ada pada file function.php