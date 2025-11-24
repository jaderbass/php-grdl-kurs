<!DOCTYPE html>
<html lang="de">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ostersonntag, Auswertung</title>
   <link rel="stylesheet" href="../../../../php_kurs_woche1/materialien/style/style.css">
   
</head>

<body>
   <header>
      <h1>Ostersonntag</h1>
   </header>
   <main class="container">
      <?php
      /* Einbinden der Datei mit der Funktion ostersonntag() */
      include "ostersonntag.inc.php";
      /* Hat der Benutzer die beiden Jahreszahlen in der falschen Reihenfolge eingegeben,
         werden sie getauscht. */
      // Die Funktion intval() erzeugt aus den Strings, welche ein Formular liefert explizit den Datentyp Integer.
      $anfang = intval($_POST["anfang"]);
      $ende = intval($_POST["ende"]);
      // ? Hier bitte den Code zum Tauschen der Jahreszahlen einfügen
      if($anfang > $ende) {
         $tmp = $anfang; $anfang = $ende; $ende = $tmp;
      }
      // ? Und hier bitte den Code für die Tabelle einfügen
      ?>
      <table>
         <tr>
            <th>Jahr</th>
            <th>Ostersonntag</th>
         </tr>
         <?php
      /* Für jedes Jahr gibt es einen Durchlauf einer for-Schleife,
      jeweils mit einem Aufruf der Funktion ostersonntag() */
      for($i = $anfang; $i <= $ende; $i++):
         // ? Nutzen Sie als Variablen für die Datumswerte bitte die Bezeichner $jahr, $monat bzw. $tag.
         /* In den beiden Variablen $tag und $monat sind nach jedem Aufruf der Funktion ostersonntag()
         die Werte für den Tag und den Monat des betreffenden Jahres per Referenz gespeichert. */
         $jahr = $i;
         $monat = 1;
         $tag = 1;
         ostersonntag($jahr, $tag, $monat);
         ?>
         <tr>
            <td><?= $jahr ?></td>
            <td><?= $tag ?>.<?= $monat ?>.<?= $jahr ?></td>
         </tr>
         <?php
      endfor;
      
      ?>
      </table>
   </main>
</body>

</html>