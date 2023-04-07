<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php
    /*
     * In diesem PHP-Code wird ein neuer Datensatz zur Tabelle "personen" hinzugefügt,
     * wenn das HTML-Formular abgesendet wurde.
     * Die eingegebenen Daten werden gesammelt und als SQL-Abfrage ausgeführt, um den neuen Datensatz einzufügen.
     * Die Anzahl der betroffenen Zeilen wird überprüft, um festzustellen, ob der Datensatz erfolgreich hinzugefügt wurde.
     * Schließlich wird die Verbindung zur Datenbank geschlossen.
     */

    if (isset($_POST["gesendet"])) {
        // Verbindung aufnehmen und Datenbank auswählen
        $con = mysqli_connect("", "root", "", "firma");

        // Eingabewerte aus dem Formular sammeln
        $na = $_POST["na"];
        $vn = $_POST["vn"];
        $pn = intval($_POST["pn"]);
        $ge = doubleval($_POST["ge"]);
        $gt = $_POST["gt"];

        // SQL-Abfrage erstellen
        $sql = "INSERT INTO personen(name, vorname, personalnummer, gehalt, geburtstag) VALUES('$na', '$vn', $pn, $ge, '$gt')";

        // SQL-Abfrage ausführen
        mysqli_query($con, $sql);

        // Anzahl der betroffenen Zeilen prüfen
        $num = mysqli_affected_rows($con);

        // Erfolg oder Fehlermeldung ausgeben
        if ($num > 0) {
            echo "<p><font color='#00aa00'>";
            echo "Ein Datensatz hinzugekommen";
            echo "</font></p>";
        } else {
            echo "<p><font color='#ff0000'>";
            echo "Es ist ein Fehler aufgetreten, es ist kein Datensatz hinzugekommen";
            echo "</font></p>";
        }

        // Verbindung schließen
        mysqli_close($con);
    }
    ?>
</head>
<body>
<p>Geben Sie bitte einen Datensatz ein<br> und senden Sie das Formular ab:</p>
<form action="db_erzeugen.php" method="post">
    <p><input name="na"> Name</p>
    <p><input name="vn"> Vorname</p>
    <p><input name="pn"> Personalnummer (eine ganze Zahl)</p>
    <p><input name="ge"> Gehalt (Nachkommastellen mit Punkt)</p>
    <p><input name="gt"> Geburtsdatum (in JJJJ-MM-TT)</p>
    <p><input type="submit" name="gesendet">
    <input type="reset"></p>
</form>
<p>Alle <a href="db_tabelle.php">anzeigen</a></p>
</body>
</html>
