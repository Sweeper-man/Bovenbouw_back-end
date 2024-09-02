<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onkunde</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        body {
            background-color: rgb(59, 58, 53);
            margin: auto;
            max-width: 500px;
        }

        .menu {
            background-color: rgb(171, 37, 19);
            display: block;
            overflow: hidden;
            padding: 10px;
        }

        .menu a{
            color: white;
            text-decoration: none;
        }

        form {
            background-color: white;
            padding: 10px;
        }

        footer {
            background-color: rgb(83, 82, 69);
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a class="active" href="#paniek">Er heerst paniek...</a>
        <a href="#onkunde">Onkunde</a>
    </div>
    <form>
        <h1>Onkunde</h1>
        <label for="één">Wat zou je graag willen kunnen?</label>
        <input type="text" id="één" name="één" required><br>

        <label for="twee">Met welk persoon kun je goed opschieten?</label>
        <input type="text" id="twee" name="twee" required><br>

        <label for="drie">Wat is je favoriete getal?</label>
        <input type="text" id="drie" name="drie" required><br>

        <label for="vier">Wat heb je altijd mee als je op vakaniet gaat?</label>
        <input type="text" id="vier" name="vier" required><br>

        <label for="vijf">Wat is je beste persoonlijke eigenschap?</label>
        <input type="text" id="vijf" name="vijf" required><br>

        <label for="zes">Wat is je slechste persoonlijke eigenschap?</label>
        <input type="text" id="zes" name="zes" required><br>

        <label for="zeven">Wat is het ergste dat je kan overkomen?</label>
        <input type="text" id="zeven" name="zeven" required><br>

        <input type="submit" value="Versturen">
    </form>

    <footer>
        © Sean van Gooswilligen
    </footer>
</body>
</html>