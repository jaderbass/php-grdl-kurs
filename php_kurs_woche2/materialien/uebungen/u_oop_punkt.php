<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',true);
require_once __DIR__ . "/class/Punkt.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Übung Punkt</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <?php include_once __DIR__ . '/inc/oop_nav.php' ?>
  <header>
    <h1>Punkte</h1>
  </header>
  <main class="container">
    <p>
      <?php
        $punkt1 = new Punkt;
        echo "$punkt1<br>";
        $punkt2 = new Punkt(3.5, 2.5);
        echo "$punkt2<br>";
        $punkt3 = new Punkt(4);
        echo "$punkt3<br>";
        $punkt4 = new Punkt(y: 1.5);
        echo "$punkt4<br>";
        $punkt4->verschieben(4.5, 2);
        echo "$punkt4";
      ?>
    </p>
  </main>
  <script src="js/nav.js"></script>
</body>
</html>