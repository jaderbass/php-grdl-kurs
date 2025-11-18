<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',true);
require_once __DIR__ . "/class/Polygon.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Übung Polygon</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <?php include_once __DIR__ . '/inc/oop_nav.php' ?>
  <header>
    <h1>Polygone</h1>
  </header>
  <main class="container">
    <p>
      <?php
        $polygon1 = new Polygon;
        echo "$polygon1<br>";
        $punkt1 = new Punkt(3.5, 2.5);
        $punkt2 = new Punkt(-2, 8.5);
        $polygon2 = new Polygon(
          array(
            $punkt1, 
            new Punkt(3), 
            $punkt2, 
            new Punkt(4.5, 6)
          )
        );
        echo "$polygon2<br>";
        $polygon2->verschieben(1, 2.5);
        echo "$polygon2<br>";
      ?>
    </p>
  </main>
  <script src="js/nav.js"></script>
</body>
</html>