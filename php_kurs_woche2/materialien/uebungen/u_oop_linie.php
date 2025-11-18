<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',true);
require_once __DIR__ . "/class/Linie.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Übung Linie</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <?php include_once __DIR__ . '/inc/oop_nav.php' ?>
  <header>
    <h1>Linien</h1>
  </header>
  <main class="container">
    <p>
      <?php
        $linie1 = new Linie;
        echo "$linie1<br>";
        $punkt1 = new Punkt(3.5, 2.5);
        $linie2 = new Linie(
          new Punkt(1.5, 4), 
          $punkt1
        );
        echo "$linie2<br>";
        $linie3 = new Linie(new Punkt(-2, 5.5));
        echo "$linie3<br>";
        $linie4 = new Linie(ende: new Punkt(2.5, 1));
        echo "$linie4<br>";
        $linie4->verschieben(-2, 1.5);
        echo "$linie4";
      ?>
    </p>
  </main>
  <script src="js/nav.js"></script>
</body>
</html>