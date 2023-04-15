<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/*
 * In diesem PHP-Code wird eine Verbindung zur MySQL-Datenbank "firma" hergestellt.
 * Anschließend wird eine SQL-Abfrage ausgeführt, um die Namen und Gehälter der Datensätze aus der Tabelle "personen" abzurufen,
 * die innerhalb des vom Benutzer eingegebenen Gehaltsbereichs (untere und obere Grenze) liegen.
 * Die abgerufenen Datensätze werden sortiert nach Gehalt ausgegeben.
 * Schließlich wird die Verbindung zur Datenbank geschlossen.
 */

// Verbindung aufnehmen und Datenbank auswählen
$con = mysqli_connect("", "root", "", "firma");

// SQL-Abfrage erstellen mit eingegebenen Gehaltsbereich
$sql = "SELECT name, gehalt FROM personen"
    . " WHERE gehalt >= " . doubleval($_POST["ug"])
    . " AND gehalt <= " . doubleval($_POST["og"])
    . " ORDER BY gehalt";

// SQL-Abfrage ausführen
$res = mysqli_query($con, $sql);

$num = mysqli_num_rows($res);

// Anzahl der gefundenen Datensätze prüfen und entsprechende Meldung ausgeben
if ($num > 0) {
    echo "Ergebnis:<br>";
} else {
    echo "Keine Ergebnisse<br>";
}

// Datensätze aus Ergebnis ermitteln und ausgeben
while ($dsatz = mysqli_fetch_assoc($res)) {
    echo $dsatz["name"] . ", " . $dsatz["gehalt"] . "<br>";
}

// Verbindung schließen
mysqli_close($con);
?>
</body>
</html>
