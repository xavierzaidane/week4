<?php
echo "A customer wants to buy a product for IDR 120,000.
The shop offers a 20% discount for purchases over IDR 100,000.
Help this customer to calculate the price to be paid after
get a discount.";

echo "<br>";

$hargaAwal = 120000;
$diskonPersen = 20;
$minimalDiskon = 100000;
if ($hargaAwal >= $minimalDiskon) {
    $diskonRupiah = ($hargaAwal * $diskonPersen) / 100;
    $hargaSetelahDiskon = $hargaAwal - $diskonRupiah;

echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',','.');

} else {
echo "Tidak ada diskon. Harga tetap Rp " . number_format($hargaAwal, 0, ',','.');
}
?>