<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
  <?php
      include "../includes/header.php";

	  // laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).
      $id = $_GET["id"];
      // $pagina = "pages/$id";
      // include $pagina;

      include "../includes/footer.php";
  ?>

</body>
</html>