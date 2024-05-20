<?php
$getal1 = rand(1,10);
$getal2 = rand(1,10);

echo ($getal1 . " + " . $getal2 . " = " . $getal1 + $getal2 . "<br>");
echo ($getal1 . " - " . $getal2 . " = " . $getal1 - $getal2 . "<br>");
echo ($getal1 . " × " . $getal2 . " = " . $getal1 * $getal2 . "<br>");
echo ($getal1 . " : " . $getal2 . " = " . $getal1 / $getal2 . "<br>");
echo "<br>";

for ($x = 0; $x <= 10; $x++) {
    echo "6 × ".$x." = ". 6*$x."<br>";
}
echo "<br>";

$getallen = array("3", "5", "8", "12");
foreach ($getallen as $getal) {
    for ($y = 0; $y <= 10; $y++) {
        echo $getal." × ".$y." = ".$getal*$y."<br>";
    }
    echo "<br>";
}
?>