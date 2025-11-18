<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',true);
require_once __DIR__ . "/class/PolygonGefuellt.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Übung Polygon gefüllt</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <?php include_once __DIR__ . '/inc/oop_nav.php' ?>
  <header>
    <h1>Gefüllte Polygone</h1>
  </header>
  <main class="container">
    <p>
      <?php
        $polygonGefuellt1 = new PolygonGefuellt(
          array(
            new Punkt(3.5,1),
            new Punkt(-2, 6.5),   
            new Punkt(1.5, -3.5), 
            new Punkt(4.5, 6)
          ), 
          "Rot"
        );
        echo "$polygonGefuellt1<br>";
        $polygonGefuellt1->verschieben(0.5, 3.5);
        echo "$polygonGefuellt1<br>";
        $polygonGefuellt1->faerben("Blau");
        echo "$polygonGefuellt1<br>";
      ?>
    </p>
  </main>
  <script src="js/nav.js"></script>
</body>
</html>