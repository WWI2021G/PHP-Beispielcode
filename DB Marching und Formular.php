<!-- HTML-Formular zur Eingabe des Namensanfangs -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<p>Anzeige der Personen mit folgendem Namensanfang:</p>
<form action="db_platzhalter.php" method="post">
    <p><input name="anfang"></p>
    <p><input type="submit"> <input type="reset"></p>
</form>
</body>
</html>

<!-- PHP-Code zur Verarbeitung der eingegebenen Informationen und zum Anzeigen der Ergebnisse -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/*
 * In diesem PHP-Code wird eine Verbindung zur MySQL-Datenbank "firma" hergestellt.
 * Anschließend wird eine SQL-Abfrage ausgeführt, um die Namen und Vornamen der Datensätze aus der Tabelle "personen" abzurufen,
 * die mit dem vom Benutzer eingegebenen Namensanfang übereinstimmen.
 * Die abgerufenen Datensätze werden ausgegeben.
 * Schließlich wird die Verbindung zur Datenbank geschlossen.
 */

// Verbindung aufnehmen und Datenbank auswählen
$con = mysqli_connect("", "root", "", "firma");

// SQL-Abfrage erstellen mit eingegebenem Namensanfang
$sql = "SELECT name, vorname FROM personen"
    . " WHERE name LIKE '" . $_POST["anfang"] . "%'";

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
    echo $dsatz["name"] . ", " . $dsatz["vorname"] . "<br>";
}

// Verbindung schließen
mysqli_close($con);
?>
</body>
</html>
