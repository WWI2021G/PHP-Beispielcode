<!-- HTML-Formular zur Auswahl der Gehaltsgruppen -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<p>Anzeige der Personen aus der Gehaltsgruppe:</p>
<form action="db_radio.php" method="post">
    <p>
        <input type="radio" name="geh" value="1" checked="checked"> bis 3000 &euro; einschl.<br>
        <input type="radio" name="geh" value="2"> ab 3000 &euro; ausschl. bis 3500 &euro; einschl.<br>
        <input type="radio" name="geh" value="3"> ab 3500 &euro; ausschl. bis 5000 &euro; einschl.<br>
        <input type="radio" name="geh" value="4"> ab 5000 &euro; ausschl.
    </p>
    <p><input type="submit"> <input type="reset"></p>
</form>
</body>
</html>

<!-- PHP-Code zur Verarbeitung der ausgewählten Gehaltsgruppe und Anzeigen der Ergebnisse -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/*
 * In diesem PHP-Code wird eine Verbindung zur MySQL-Datenbank "firma" hergestellt.
 * Basierend auf der vom Benutzer ausgewählten Gehaltsgruppe wird eine SQL-Abfrage erstellt,
 * um die Namen und Gehälter der Datensätze aus der Tabelle "personen" abzurufen, die zur ausgewählten Gehaltsgruppe gehören.
 * Die abgerufenen Datensätze werden ausgegeben.
 * Schließlich wird die Verbindung zur Datenbank geschlossen.
 */

// Verbindung aufnehmen und Datenbank auswählen
$con = mysqli_connect("", "root", "", "firma");

// SQL-Abfrage erstellen basierend auf ausgewählter Gehaltsgruppe
$sql = "SELECT name, gehalt FROM personen WHERE ";

switch ($_POST["geh"]) {
    case 1:
        $sql .= "gehalt <= 3000";
        break;
    case 2:
        $sql .= "gehalt > 3000 AND gehalt <= 3500";
        break;
    case 3:
        $sql .= "gehalt > 3500 AND gehalt <= 5000";
        break;
    case 4:
        $sql .= "gehalt > 5000";
}

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
