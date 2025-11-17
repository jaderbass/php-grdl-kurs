<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);
/**
 * Aufgabe:
 * 1) Definiere class Note (title, content, __construct).
 * 2) Erzeuge mehrere Objekte und gib sie in HTML aus.
 * 3) Optional: Lese Daten aus notes.json und wandle sie in Objekte um.
 */

require_once __DIR__ . '/class/Note.php';
$path = __DIR__ . '/json/notes.json';

// echo '<pre>', var_dump( json_decode((string)file_get_contents($path), false) ), '</pre>';

$notes_object = json_decode((string)file_get_contents($path), false);
$notes = [];
foreach($notes_object as $n) {
  array_push($notes, new Note($n->title, $n->content));
}
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Übung 4 – Note-Klasse V2</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <header><h1>Übung 4 – Note-Klasse V2</h1></header>
  <main class="container">
    <?php foreach($notes as $n): ?>
      <article class="post">
        <h2><?= htmlspecialchars($n->getTitle()) ?></h2>
        <p><?= nl2br(htmlspecialchars($n->getContent())) ?></p>
      </article>
    <?php endforeach; ?>
  </main>
</body>
</html>
