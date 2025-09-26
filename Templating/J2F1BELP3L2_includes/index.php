<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
  <?php
    include "includes/header.php";
  ?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php
    $file = $_GET['page'] ?? 'onderwerp1';

    $pages = ['onderwerp1', 'onderwerp2', 'onderwerp3', 'onderwerp4'];

    if (in_array($file, $pages)) {
      include "pages/{$file}.php";
    }
  ?>

	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php
    include "includes/footer.php";
  ?>

</body>
</html>