<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<p>Treffen Sie Ihre Auswahl:</p>
<form action="db_einzel_b.php" method="post">
    <?php
    // Verbindung zur Datenbank
    $con = mysqli_connect("", "root", "", "firma");
    $res = mysqli_query($con, "SELECT * FROM personen");

    // Tabelle erstellen
    echo "<table border='1'>";

    // Überschrift
    echo "<tr><td>Auswahl</td><td>Name</td><td>Vorname</td><td>P-Nr</td><td>Gehalt</td><td>Geburtstag</td></tr>";

    // Tabellenzeilen erstellen
    while ($dsatz = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td><input type='radio' name='auswahl' value='" . $dsatz["personalnummer"] . "'></td>";
        echo "<td>" . $dsatz["name"] . "</td>";
        echo "<td>" . $dsatz["vorname"] . "</td>";
        echo "<td>" . $dsatz["personalnummer"] . "</td>";
        echo "<td>" . $dsatz["gehalt"] . "</td>";
        echo "<td>" . $dsatz["geburtstag"] . "</td>";
        echo "</tr>";
    }

    // Tabellenende
    echo "</table>";

    mysqli_close($con);
    ?>
    <p><input type="submit" value="Datensatz anzeigen"></p>
</form>
</body>
</html>
<!--In db_einzel_a.php wird eine Liste von Mitarbeitern aus der Datenbank abgerufen. 
Der Benutzer kann einen Mitarbeiter auswählen und auf "Datensatz anzeigen" klicken, um die Daten des ausgewählten 
Mitarbeiters in db_einzel_b.php anzuzeigen.  -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    if (isset($_POST["auswahl"])) {
        // Verbindung zur Datenbank
        $con = mysqli_connect("", "root", "", "firma");

        // SQL-Abfrage erstellen und ausführen
        $sql = "SELECT * FROM personen WHERE personalnummer = " . $_POST["auswahl"];
        $res = mysqli_query($con, $sql);
        $dsatz = mysqli_fetch_assoc($res);

        // Formular zum Bearbeiten des ausgewählten Mitarbeiters
        echo "<p>Bitte neue Inhalte eintragen und speichern:</p>";
        echo "<form action='db_einzel_c.php' method='post'>";
        echo "<p><input name='na' value='" . $dsatz["name"] . "'> Nachname</p>";
        echo "<p><input name='vn' value='" . $dsatz["vorname"] . "'> Vorname</p>";
        echo "<p><input name='pn' value='" . $_POST["auswahl"] . "'> Personalnummer</p>";
        echo "<p><input name='ge' value='" . $dsatz["gehalt"] . "'> Gehalt</p>";
        echo "<p><input name='gt' value='" . $dsatz["geburtstag"] . "'> Geburtstag</p>";
        echo "<input type='hidden' name='oripn' value='" . $_POST["auswahl"] . "'>";
        echo "<p><input type='submit' value='Speichern'>";
        echo " <input type='reset'></p>";
        echo "</form>";
        mysqli_close($con);
    } else {
        echo "<p>Keine Auswahl getroffen</p>";
    }
    ?>
    </body>
</html>

<!-- In db_einzel_b.php wird das Formular zum Bearbeiten der Mitarbeiterdaten angezeigt, 
basierend auf der Auswahl des Benutzers in db_einzel_a.php. 
Wenn der Benutzer auf "Speichern" klickt, werden die aktualisierten Daten an db_einzel_c.php gesendet. -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    // Verbindung zur Datenbank
    $con = mysqli_connect("", "root", "", "firma");

    // Variablen aus Formular abrufen
    $na = $_POST["na"];
    $vn = $_POST["vn"];
    $pn = intval($_POST["pn"]);
    $ge = doubleval($_POST["ge"]);
    $gt = $_POST["gt"];
    $oripn = $_POST["oripn"];

    // SQL-Abfrage erstellen und ausführen
    $sql = "UPDATE personen SET name = '$na',"
    . " vorname = '$vn', personalnummer = $pn,"
    . " gehalt = $ge, geburtstag = '$gt'"
    . " WHERE personalnummer = $oripn";
    mysqli_query($con, $sql);

    // Betroffene Datensätze anzeigen
    $num = mysqli_affected_rows($con);
    if ($num > 0) {
        echo "Betroffen: $num<br>";
    } else {
        echo "Betroffen: 0<br>";
    }

    // Verbindung schließen
    mysqli_close($con);
    ?>
    <p>Zur <a href="db_einzel_a.php">Auswahl</a></p>
</body>
</html>
<!-- In db_einzel_c.php werden die aktualisierten Daten des ausgewählten Mitarbeiters in der Datenbank gespeichert. 
Danach wird die Anzahl der betroffenen Datensätze angezeigt. Der Benutzer kann zur Auswahlseite zurückkehren, 
indem er auf den "Auswahl" Link klickt. -->