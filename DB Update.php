<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php
    /*
     * In diesem PHP-Code wird die Tabelle "personen" aktualisiert,
     * indem das Gehalt aller Personen um 5% erhöht wird.
     * Eine SQL-Abfrage wird erstellt und ausgeführt, um das Gehalt jedes Datensatzes in der Tabelle zu aktualisieren.
     * Die Anzahl der betroffenen Zeilen wird überprüft und ausgegeben.
     * Schließlich wird die Verbindung zur Datenbank geschlossen.
     */

    // Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect("", "root", "", "firma");

    // SQL-Abfrage erstellen
    $sql = "UPDATE personen SET gehalt = gehalt * 1.05";

    // SQL-Abfrage ausführen
    mysqli_query($con, $sql);

    // Anzahl der betroffenen Zeilen prüfen
    $num = mysqli_affected_rows($con);

    // Anzahl der betroffenen Zeilen ausgeben
    if ($num > 0) {
        echo "Betroffen: $num<br>";
    } else {
        echo "Betroffen: 0<br>";
    }

    // Verbindung schließen
    mysqli_close($con);
    ?>
</head>
<body>
<p>Alle <a href="db_tabelle.php">anzeigen</a></p>
</body>
</html>
