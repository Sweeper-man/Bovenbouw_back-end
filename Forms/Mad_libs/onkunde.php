<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onkunde</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="paniek.php">Er heerst paniek...</a>
        <a href="onkunde.php">Onkunde</a>
    </div>
    <form>
        <?php
            echo $_GET["één"];
            echo $_GET["twee"];
            echo $_GET["drie"];
            echo $_GET["vier"];
            echo $_GET["vijf"];
            echo $_GET["zes"];
            echo $_GET["zeven"];
        ?>
    </form>
    <footer>
        © Sean van Gooswilligen
    </footer>
</body>
</html>