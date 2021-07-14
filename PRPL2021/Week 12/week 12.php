<?php
function kubus(){
    $sisi = 10;
    $volume = $sisi*$sisi*$sisi;
    echo "<b>1. Rumus Menghitung Volume Kubus</b><br>";
    echo "Rumus Volume : V = S<sup>3</sup><br>";
    echo "Diketahui S adalah panjang rusuk kubus / sisi<br><br>";
    echo "Panjang Sisi Kubus (s) : $sisi cm<br>";
    echo "V = $sisi x $sisi x $sisi <br>";
    echo "Hasil Volume nya adalah : $volume";
}

function persegipanjang(){
    $panjang = 10;
    $lebar = 5;
    $luas = $panjang*$lebar;
    echo "<b>2. Rumus Menghitung Luas Persegi Panjang</b><br>";
    echo "Rumus Luas : P x L<br>";
    echo "Diketahui P adalah panjang dan L adalah Lebar<br><br>";
    echo "Panjang(P) : $panjang cm dan Lebar(L) : $lebar<br>";
    echo "Luas = $panjang x $lebar <br>";
    echo "Hasil Luas Persegi Panjang adalah : $luas";
}

function kelilinglingkaran(){
    $jarijari = 5;
    $phi = 3.14;
    $K = 2*$phi*$jarijari;
    echo "<b>3. Rumus Menghitung Keliling Lingkaran</b><br>";
    echo "Rumus Keliling Lingkaran : 2 x PHI x r<br>";
    echo "Diketahui r adalah jari-jari dan PHI adalah 3,14<br><br>";
    echo "Jari-jari(r) : $jarijari cm<br>";
    echo "K = 2 x $phi x $jarijari <br>";
    echo "Hasil Keliling Lingkaran adalah : $K";
}

kubus();
echo "<br><br><br>";
persegipanjang();
echo "<br><br><br>";
kelilinglingkaran();
?>