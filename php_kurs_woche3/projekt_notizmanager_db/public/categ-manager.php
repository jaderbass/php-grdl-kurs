<?php
declare(strict_types=1);
// ! die folgenden 2 Zeilen in der Produktiv-Variante löschen!
error_reporting(E_ALL);
ini_set('display_errors',true);

session_start();

require_once __DIR__ . '/../inc/db-connect.php';
require_once __DIR__ . '/../inc/functions.php';

$categs = getAllCategories($pdo);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategorie-Manager</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>Kategorie-Manager</h1>
      <div class="text-muted">
        Manage User Login | <a href="index.php">Notiz-Manager</a>
      </div>
    </div>
  </header>
  <main class="container">
    <section class="card">
      <h2>Neue Kategorie</h2>
      <form action="categories/add.php" method="post">
        <label>Kategorie-Name <input type="text" name="name" required></label>
        <button type="submit">Speichern</button>
      </form>
    </section>

    <section class="card">
      <h2>Einträge</h2>
      <table>
        <thead>
          <tr>
            <th>Kategorie</th>
            <th>Aktionen</th>
          </tr>
        </thead>
          <?php foreach ($categs as $c): ?>
            <tr>
              <td><?= safe($c->name) ?></td>
              <td>
                <a href="categories/edit.php?id=<?= (int)$c->id ?>" class="button">Bearbeiten</a>
                <form action="categories/delete.php" style="display:inline;" method="post">
                  <input type="hidden" name="id" value="<?= (int)$c->id ?>">
                  <button type="submit" class="button text-danger">Löschen</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        <tbody>

        </tbody>
      </table>
    </section>
  </main>
</body>
</html>