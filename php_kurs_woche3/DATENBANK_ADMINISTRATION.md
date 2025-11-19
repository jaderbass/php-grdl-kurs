# Datenbank-Administration per CLI

## MySQL/MariaDB-CLI öffnen

**Voraussetzung:** auf dem Webserver anmelden.

**Prüfe, ob der mysql-Dienst installiert und gestartet ist**

```bash
sudo systemctl status mariadb
```

**Starten (falls nicht aktiv)**

```bash
sudo systemctl start mariadb
```

***Autostart aktivieren**

```bash
sudo systemctl enable mariadb
```

**Dann** CLI öffnen

```bash
sudo mysql
```

Oder – falls du einen eigenen DB-User hast:

```bash
mysql -u deinuser -p
```

## Beispiel-Datenbank für den Notizmanager anlegen

Sobald du in der CLI bist:

```sql
CREATE DATABASE notizmanager CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'php_user'@'localhost' IDENTIFIED BY 'deinpasswort';
GRANT ALL PRIVILEGES ON notizmanager.* TO 'notizuser'@'localhost';
FLUSH PRIVILEGES;
```

Das Passwort kann z.B. über einen Passwortgenerator wie [Lastpass](https://www.lastpass.com/features/password-generator) generiert werden. Für sichere Passwörter 24 Zeichen benutzen.

**Fertig – CLI verlassen**

```sql
exit;
```

## SQL-Dump auf den Webserer laden

Falls das SQL-Dump noch nicht auf dem Server liegt muss es erst hochgeladen werden. Dazu die Datei im Windows-Explorer anzeigen und per Drag and Drop in das entsprechende Verzeichnis im VS Code-Explorer ziehen.

## Dump in den DB-Server einspielen

### 1) In das Verzeichnis wechseln

Am besten im VS Code das Terminal öffnen. Dann per `cd pfad/zum/verzeichnis` in das Verzeichnis mit der `.sql`-Datei wechseln.

### 2) Dump importieren

```bash
sudo mysql notizmanager < notizmanager_schema.sql
```

### 3) Optional: kurz prüfen

MariaDB / MySQL - CLI öffnen

```bash
sudo mysql
```

danach

```sql
USE notizmanager;
SHOW TABLES;
exit;
```

## PDO einsetzen

In der Datei `01_pdo_connect.php` folgendes einfügen:

```php
echo '<pre>', var_dump( PDO::getAvailableDrivers() ), '</pre>';
```

Danach sollte folgende Ausgabe sichtbar sein:

```txt
array(1) {
  [0]=>
  string(5) "mysql"
}
```

Sollte ein leeres Array ausgegeben werden, muss der MySQL-Treiber für PDO nachinstalliert werden.

```bash
sudo apt install php8.3-mysql
sudo systemctl restart apache2
```

Danach prüfen mit

```bash
php -m | grep pdo
php -m | grep mysql
```

oder noch einmal die Datei `01_pdo_connect.php` im Browser aktualisieren.
