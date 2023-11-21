<?php

class Perpustakaan {
    function HitungBuku($totalDipinjam,$totalTersedia,$totalRusak,$totalTD){
    $keseluruhan = $totalDipinjam+$totalTersedia+$totalRusak+$totalTD;
    $totalBuku75 = ($keseluruhan)-75;
    $total20 = ($keseluruhan-(0.2 *$totalRusak));
    echo "Total Keseluruhan Buku : " . $keseluruhan;
    echo "<br/>";
    echo "Total Keseluruhan Buku yang dikembalikan sebanyak 75 buku : " . $totalBuku75;
    echo "<br/>";
    echo "Total Keseluruhan Buku Jika 20% Rusak : " . $total20;
    echo "<br/>";
 }
}