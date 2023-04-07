<!-- Der bereitgestellte PHP-Code illustriert das Konzept der Objektreferenzen und das Klonen von Objekten in PHP. 
Der Code erstellt eine Klasse "Fahrzeug" mit Eigenschaften für Geschwindigkeit und Farbe und Funktionen zum Beschleunigen, 
Lackieren und Ausgeben der Eigenschaften. Hier ist eine Erklärung des Codes: -->
<html>
<body>
<?php
class Fahrzeug {
    private $geschwindigkeit = 0; // Geschwindigkeit des Fahrzeugs, Standardwert ist 0
    private $farbe = "rot"; // Farbe des Fahrzeugs, Standardwert ist "rot"

    // Funktion, um die Geschwindigkeit des Fahrzeugs zu erhöhen
    public function beschleunigen($wert) {
        $this->geschwindigkeit += $wert;
    }

    // Funktion, um die Farbe des Fahrzeugs zu ändern
    public function lackieren($wert) {
        $this->farbe = $wert;
    }

    // Funktion, um die Geschwindigkeit und Farbe des Fahrzeugs auszugeben
    public function ausgabe() {
        echo "Geschwindigkeit: $this->geschwindigkeit, Farbe: $this->farbe <br />";
    }
}

// Original-Objekt
echo "Vor Veränderung:<br />";
$vespa = new Fahrzeug();
$vespa->beschleunigen(20);
$vespa->ausgabe();

// Neues Handle, d. h. Verweis/Referenz zu Original-Objekt
$honda = $vespa;
$honda->ausgabe();

// Zweites Objekt, durch Standard-Klonen
$yamaha = clone $vespa;
$yamaha->ausgabe();

echo "<p> </p>";

// Original verändern
echo "Nach Veränderung:<br />";
$vespa->beschleunigen(35);
$vespa->lackieren("gelb");
$vespa->ausgabe();

// Benutzung des anderen Handles: Änderung
$honda->ausgabe();

// Klon: Keine Änderung
$yamaha->ausgabe();
?>
</body>
</html>
<!-- Der Code erstellt zunächst ein Fahrzeugobjekt namens "Vespa", beschleunigt es auf 20 und gibt seine Eigenschaften aus. 
Anschließend erstellt der Code ein neues Objekt "Honda", das auf das gleiche Fahrzeugobjekt wie "Vespa" verweist. Das bedeutet, dass "Honda" und "Vespa" das 
gleiche Objekt im Speicher repräsentieren. Danach wird ein drittes Fahrzeugobjekt "Yamaha" erstellt, indem das "Vespa"-Objekt geklont wird.
In diesem Fall wird eine separate Kopie des "Vespa"-Objekts erstellt und "Yamaha" verweist auf diese neue Kopie.

Nachdem die drei Objekte erstellt wurden, wird das "Vespa"-Objekt verändert, indem seine Geschwindigkeit erhöht und seine Farbe 
geändert wird. Da "Honda" auf das gleiche Objekt wie "Vespa" verweist, werden die Änderungen auch in "Honda" sichtbar. 
Das "Yamaha"-Objekt bleibt jedoch unverändert, da es eine separate Kopie des ursprünglichen "Vespa"-Objekts ist. -->