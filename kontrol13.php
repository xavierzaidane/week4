<?php
echo "A game player wants to calculate their total score in the game.
They get a score based on the points they collect. If they are
have more than 500 points, then they will get additional prizes.
Make the first row display 'Player's total score is: (points)'. And the second row
'Do players get additional rewards? (YES/NO)'";

echo "<br><br>";

$skorPemain = 600;
$batasHadiah = 500;
$totalskor = $skorPemain;

if ($totalskor > $batasHadiah) {
    $hadiah = "YES";
} else {
    $hadiah = "no";
}

echo "The total player score is: " . $totalskor . "<br>";
echo "Do players get additional rewards? " . $hadiah;
?>
