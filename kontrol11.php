<?php
echo "There is a teacher who wants to calculate the total scores of 10 students in an exam
mathematics. This teacher wants to ignore the two highest grades and two grades
lowest. Help this teacher calculate the total grade to be used for
determine the average value after ignoring the highest and lowest values.
The following is a list of scores from 10 students (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)";

$nilaisiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaisiswa);
array_splice($nilaisiswa, 0, 2);
array_splice($nilaisiswa, -2);
$totalNilai = array_sum($nilaisiswa);
$rataRata = $totalNilai / count($nilaisiswa);

echo "<br>";
echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai
<br>";
echo "Rata-rata nilai: $rataRata";
?>