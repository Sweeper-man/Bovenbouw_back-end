<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
</html>

<?php
date_default_timezone_set("Europe/Amsterdam");
$tijd = date("H:i:s");

if ($tijd >= "06:00:00" && $tijd < "12:00:00") {
    $achtergrond = '<body style="background-image: url(images/morning.png)">';
    echo "<h1>Goede morgen!</h1>";
}

else if ($tijd >= "12:00:00" && $tijd < "18:00:00") {
    $achtergrond = '<body style="background-image: url(images/afternoon.png)">';
    echo "<h1>Goede middag!</h1>";
}

else if ($tijd >= "18:00:00" && $tijd < "24:00:00") {
    $achtergrond = '<body style="background-image: url(images/evening.png)">';
    echo "<h1>Goede avond!</h1>";
}

else if ($tijd >= "00:00:00" && $tijd < "06:00:00") {
    $achtergrond = '<body style="background-image: url(images/night.png)">';
    echo "<h1>Goede nacht!</h1>";
}

echo "<h2>Het is nu ".$tijd."</h2>";
echo $achtergrond;
?>
</html>