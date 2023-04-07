<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Fehlerbehandlungsbeispiel</title>
</head>
<body>
<?php
// Inkludiere die Fehlerklassen-Definitionen
include("p775.inc.php");

/**
 * Dateizugriff mit Fehlerbehandlung
 * 
 * Versucht, eine Datei zu öffnen, den Inhalt zu lesen und die Datei
 * wieder zu schließen. Wenn ein Fehler auftritt, wird eine
 * DateiFehler-Ausnahme geworfen und entsprechend behandelt.
 */
try {
    $fp = fopen("test.txt", "r");
    if (!$fp) {
        throw new DateiFehler("Datei nicht vorhanden");
    }
    $zeile = fgets($fp, 50); // 50: Zahl der Zeichen
    echo "<p>$zeile</p>";
    fclose($fp);
} catch (DateiFehler $ausnahme) {
    $ausnahme->ausgabe();
}

/**
 * Mathematik mit Fehlerbehandlung
 * 
 * Führt eine Division durch und gibt das Ergebnis aus. Wenn eine
 * Division durch Null auftritt, wird eine MathFehler-Ausnahme
 * geworfen und entsprechend behandelt.
 */
$x = 24;
echo "<p>";
for ($y = 4; $y > -5; $y--) {
    try {
        if ($y == 0) {
            throw new MathFehler("Division durch 0");
        }
        $z = $x / $y;
        echo "$x / $y = $z<br />";
    } catch (MathFehler $ausnahme) {
        $ausnahme->ausgabe();
    }
}
echo "</p>";
?>
</body>
</html>
<!-- Dieser Code zeigt ein Beispiel für die Fehlerbehandlung in PHP mit benutzerdefinierten Ausnahmeklassen (DateiFehler und MathFehler).
 Es gibt zwei Hauptabschnitte: einen für den Dateizugriff und einen für mathematische Berechnungen. 
 In beiden Abschnitten wird die Fehlerbehandlung mithilfe von try und catch-Blöcken durchgeführt. 
 Die Dokumentation erfolgt im VS-Code-konformen Format für PHP-Dateien, indem sie mehrzeilige Kommentarblöcke verwendet, 
 um die Abschnitte und ihre Fehlerbehandlungsprozesse zu beschreiben. -->