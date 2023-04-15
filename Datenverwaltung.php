<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
// Verbindung zur Datenbank herstellen
$con = mysqli_connect("", "root");

// Verbindung zur Datenbank über $con, Server und user wie üblich
$sql = "CREATE DATABASE IF NOT EXISTS firma";
mysqli_query($con, $sql);
// DB firma anlegen, falls noch nicht vorhanden, Zugriff über $con

mysqli_select_db($con, "firma");
// DB firma auswählen

// Die folgenden Kommandos sollten weitestgehend selbsterklärend sein!

// Tabelle 'personen' erstellen, falls sie noch nicht existiert
$sql = "CREATE TABLE IF NOT EXISTS personen (
    name VARCHAR(30) DEFAULT NULL,
    vorname VARCHAR(25) DEFAULT NULL,
    personalnummer INT(11) DEFAULT NULL,
    gehalt DOUBLE DEFAULT NULL,
    geburtstag DATE DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=UTF8";
mysqli_query($con, $sql);

// Primärschlüssel für die Tabelle 'personen' hinzufügen
$sql = "ALTER TABLE personen ADD PRIMARY KEY (personalnummer)";
mysqli_query($con, $sql);

// Datensätze in die Tabelle 'personen' einfügen
$sql = "INSERT INTO personen (name, vorname, personalnummer, gehalt, geburtstag) VALUES
    ('Maier', 'Hans', 6714, 3500, '1962-03-15'),
    ('Schmitz', 'Peter', 81343, 3750, '1958-04-12'),
    ('Mertens', 'Julia', 2297, 3621.5, '1959-12-30')";
mysqli_query($con, $sql);

// Verbindung zur Datenbank schließen
mysqli_close($con);
?>
</body>
</html>
