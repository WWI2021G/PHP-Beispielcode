<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/*
 * In diesem PHP-Code wird eine Verbindung zur MySQL-Datenbank "firma" hergestellt.
 * Anschließend wird eine SQL-Abfrage ausgeführt, um alle Datensätze aus der Tabelle "personen" abzurufen.
 * Die Anzahl der gefundenen Datensätze wird überprüft und eine entsprechende Nachricht ausgegeben.
 * Danach werden die Datensätze aus dem Ergebnis ermittelt, in einem assoziativen Array gespeichert und ausgegeben.
 * Schließlich wird die Verbindung zur Datenbank geschlossen.
 */

// Verbindung aufnehmen und Datenbank auswählen
$con = mysqli_connect("", "root", "", "firma");
// Reihenfolge der Parameter:
// 1: Server, default: localhost
// 2: User
// 3: Passwort
// 4: Datenbank

// SQL-Abfrage ausführen
$res = mysqli_query($con, "SELECT * FROM personen");
$num = mysqli_num_rows($res);
// Anzahl der gefundenen Datensätze

if ($num > 0) {
    echo "Ergebnis:<br>";
} else {
    echo "Keine Ergebnisse<br>";
}

// Datensätze aus Ergebnis ermitteln,
// in assoziativem Array speichern und ausgeben
while ($dsatz = mysqli_fetch_assoc($res)) {
    echo $dsatz["name"] . ", " . $dsatz["vorname"] . ", "
        . $dsatz["personalnummer"] . ", "
        . $dsatz["gehalt"] . ", "
        . $dsatz["geburtstag"] . "<br>";
}
// Indexe im assoziativen Feld entsprechen Merkmalen in DBTabelle

// Verbindung schließen
mysqli_close($con);
?>
</body>
</html>
