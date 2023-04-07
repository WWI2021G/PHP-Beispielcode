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
 * Die abgerufenen Datensätze werden in einer HTML-Tabelle formatiert und ausgegeben.
 * Schließlich wird die Verbindung zur Datenbank geschlossen.
 */

// Verbindung aufnehmen und Datenbank auswählen
$con = mysqli_connect("", "root", "", "firma");

// SQL-Abfrage ausführen
$res = mysqli_query($con, "SELECT * FROM personen");

// Tabellenbeginn
echo "<table border='1'>";

// Überschrift
echo "<tr> <td>Lfd. Nr.</td> <td>Name</td>";
echo "<td>Vorname</td> <td>Personalnummer</td>";
echo "<td>Gehalt</td> <td>Geburtstag</td> </tr>";

$lf = 1;

// Datensätze aus Ergebnis ermitteln, formatieren und ausgeben
while ($dsatz = mysqli_fetch_assoc($res)) {
    echo "<tr>";
    echo "<td>$lf</td>";
    echo "<td>" . $dsatz["name"] . "</td>";
    echo "<td>" . $dsatz["vorname"] . "</td>";
    echo "<td>" . $dsatz["personalnummer"] . "</td>";
    echo "<td>" . $dsatz["gehalt"] . "</td>";
    echo "<td>" . $dsatz["geburtstag"] . "</td>";
    echo "</tr>";
    $lf = $lf + 1;
}

// Tabellenende
echo "</table>";

// Verbindung schließen
mysqli_close($con);
?>
</body>
</html>
