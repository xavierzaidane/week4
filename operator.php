<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a=$a, Nilai b=$b <br>" ;
echo "Hasil Tambah: $hasilTambah\n <br>";
echo "Hasil Kurang: $hasilKurang\n <br>";
echo "Hasil Kali: $hasilKali\n <br>";
echo "Hasil Bagi: $hasilBagi\n <br>";
echo "Sisa Bagi: $sisaBagi\n <br>";
echo "Pangkat: $pangkat\n <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah Hasil Sama: " . ($hasilSama ? '1' : '0') . "<br>";
echo "Apakah Hasil Tidak Sama: " . ($hasilTidakSama ? '1' : '0') . "<br>";
echo "Apakah Hasil Lebih Kecil: " . ($hasilLebihKecil ? '1' : '0') . "<br>";
echo "Apakah Hasil Lebih Besar: " . ($hasilLebihBesar ? '1' : '0') . "<br>";
echo "Apakah Hasil Lebih Kecil Sama: " . ($hasilLebihKecilSama ? '1' : '0') . "<br>";
echo "Apakah Hasil Lebih Besar Sama: " . ($hasilLebihBesarSama ? '1' : '0') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;


echo "Hasil And: " . ($hasilAnd ? '1' : '0') . "<br>";
echo "Hasil Or: " . ($hasilOr ? '1' : '0') . "<br>";
echo "Hasil Not A: " . ($hasilNotA ? '1' : '0') . "<br>";
echo "Hasil Not B: " . ($hasilNotB ? '1' : '0') . "<br>";

$tambah = $a + $b;
$minus = $a - $b;
$kali = $a * $b;
$bagi = $a / $b;
$modulus = $a % $b;

echo "Hasil a tambah b: $tambah<br>";
echo "Hasil a minus b: $minus<br>";
echo "Hasil a kali b: $kali<br>";
echo "Hasil a bagi b: $bagi<br>";
echo "Hasil a modulus b: $modulus<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik:";
echo $hasilIdentik ? '1' : '0';
echo "<br>";

echo "Hasil Tidak Identik:";
echo $hasilTidakIdentik ? '1' : '0';
echo "<br>";


?>