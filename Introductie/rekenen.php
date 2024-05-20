<?php
// A
$getal1 = rand(1,10);
$getal2 = rand(1,10);

echo ($getal1 . " + " . $getal2 . " = " . $getal1 + $getal2 . "<br>");
echo ($getal1 . " - " . $getal2 . " = " . $getal1 - $getal2 . "<br>");
echo ($getal1 . " × " . $getal2 . " = " . $getal1 * $getal2 . "<br>");
echo ($getal1 . " : " . $getal2 . " = " . $getal1 / $getal2 . "<br>");
echo "<br>";

// B
// #1
for ($x = 0; $x <= 10; $x++) {
    echo "6 × ".$x." = ". 6*$x."<br>";
}
echo "<br>";

// #2
function numbers($n) {
    for ($y = 0; $y <= $n; $y++) {
        echo $y . "<br>";
    }
}

numbers(6);
echo "<br>";

// #3
$getallen = array("3", "5", "8", "12");
foreach ($getallen as $getal) {
    for ($i = 0; $i <= 10; $i++) {
        echo $getal." × ".$i." = ".$getal*$i."<br>";
    }
    echo "<br>";
}
?>