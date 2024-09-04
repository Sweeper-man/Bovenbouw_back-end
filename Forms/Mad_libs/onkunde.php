<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onkunde</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Mad Libs</h1>
    </header>
    <div class="menu">
        <a href="paniek.php">Er heerst paniek...</a>
        <a href="onkunde.php">Onkunde</a>
    </div>
    <form>
        Er zijn veel mensen die niet kunnen <?php echo $_GET["één"]; ?>. Neem nou <?php echo $_GET["twee"]; ?>. 
        Zelfs met de hulp van een <?php echo $_GET["vier"]; ?> of zelfs <?php echo $_GET["drie"]; ?> kan <?php echo $_GET["twee"]; ?> niet <? echo $_GET["één"]; ?>.
        Dat heeft niet te maken met een gebrek aan <?php echo $_GET["vijf"]; ?>, maar met een te veel aan <?php echo $_GET["zes"]; ?>.
        Te veel <?php echo $_GET["zes"]; ?> leidt tot <?php echo $_GET["zeven"]; ?> en dat is niet goed als je wilt <?php echo $_GET["één"];?>.
        Helaas voor <?php echo $_GET["twee"]; ?>.
    </form>
    <footer>
        © Sean van Gooswilligen
    </footer>
</body>
</html>