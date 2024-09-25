<?php
$totalSeats = 45; 
$occupiedSeats = 28; 

$emptySeats = $totalSeats - $occupiedSeats;

$percentageEmpty = ($emptySeats / $totalSeats) * 100;

echo "A restaurant has 45 seats in it. On one night, 28 seats
already occupied by customers. What percentage of seats are still empty in the restaurant ? <br>";
echo "The Answer is : <br>";
echo "Total seats: $totalSeats <br>";
echo "Occupied seats: $occupiedSeats <br>";
echo "Empty seats: $emptySeats <br>";
echo "Percentage of empty seats: " . round($percentageEmpty, 2) . "%";
?>
