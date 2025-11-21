<?php
declare(strict_types=1);
// ! die folgenden 2 Zeilen in der Produktiv-Variante löschen!
error_reporting(E_ALL);
ini_set('display_errors',true);

session_start();

$uri = $_SERVER['SCRIPT_FILENAME'];

require_once __DIR__ . '/../inc/db-connect.php';
require_once __DIR__ . '/../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noziz-Manager DB</title>
  <?php if( str_ends_with(dirname($uri),'categories') ): ?>
    <link rel="stylesheet" href="../../css/style.css">
  <?php else: ?>
    <link rel="stylesheet" href="../css/style.css">
  <?php endif; ?>
</head>
<body>
  <header>
    <div class="container">
      <h1>Notiz-Manager DB</h1>
      <div class="text-muted">
        Manage User Login | <a href="categ-manager.php">Kategorie-Manager</a>
      </div>
    </div>
  </header>