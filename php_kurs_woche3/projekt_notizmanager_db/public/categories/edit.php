<?php
declare(strict_types=1);
// ! die folgenden 2 Zeilen in der Produktiv-Variante löschen!
error_reporting(E_ALL);
ini_set('display_errors',true);

require_once __DIR__ . '/../../inc/db-connect.php';
require_once __DIR__ . '/../../inc/functions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$category = $id ? findCategory($pdo, $id) : null;
if(!$category) { header('Location: ../categ-manager.php'); exit; }
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategorie bearbeiten</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>Kategorie bearbeiten</h1>
    </div>
  </header>
  <main class="container">
    <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?= (int)$category->id ?>">
      <label>Kategorie-Name <input type="text" name="name" value="<?= safe($category->name) ?>" required></label>
      <button type="submit">Speichern</button>
      <a href="../categ-manager.php" class="button">Abbrechen</a>
    </form>
  </main>
</body>
</html>