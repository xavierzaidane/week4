<?php
$nilaisiswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

$totalNilai = array_sum($nilaisiswa); 
$jumlahsiswa = count($nilaisiswa); 
$rataRata = $totalNilai / $jumlahsiswa; 
$siswaDiatasRataRata = []; 


foreach ($nilaisiswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        $siswaDiatasRataRata[] = "$nama ($nilai)"; 
    }
}


echo "List of students whose grades are above average (" . round($rataRata, 2) . "):<br>";
echo implode(", ", $siswaDiatasRataRata);
?>
