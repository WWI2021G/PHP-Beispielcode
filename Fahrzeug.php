<!-- Der bereitgestellte PHP-Code erstellt eine einfache Klasse namens "Fahrzeug" und zeigt, wie man Objekte 
dieser Klasse erzeugt und verwendet. Im Folgenden wird der Code erklärt: -->
<html>
<body>
<?php
// Definition der Klasse Fahrzeug
class Fahrzeug {
    private $geschwindigkeit; // Geschwindigkeit des Fahrzeugs
    private $bezeichnung; // Bezeichnung des Fahrzeugs

    // Konstruktor der Klasse Fahrzeug
    public function __construct($bez, $ge) {
        $this->bezeichnung = $bez;
        $this->geschwindigkeit = $ge;
    }

    // Funktion, um die Geschwindigkeit des Fahrzeugs zu erhöhen
    function beschleunigen($wert) {
        $this->geschwindigkeit += $wert;
    }

    // Funktion, um die Bezeichnung und Geschwindigkeit des Fahrzeugs auszugeben
    function ausgabe() {
        echo $this->bezeichnung;
        echo " $this->geschwindigkeit km/h<br />";
    }
}

// Objekte der Klasse Fahrzeug erzeugen
$vespa = new Fahrzeug("Vespa Piaggio", 25); // Erzeugt ein Fahrzeug-Objekt "Vespa" mit 25 km/h Geschwindigkeit
$scania = new Fahrzeug("Scania TS 360", 62); // Erzeugt ein Fahrzeug-Objekt "Scania" mit 62 km/h Geschwindigkeit

// Objekte betrachten
$vespa->ausgabe(); // Gibt die Bezeichnung und Geschwindigkeit von "Vespa" aus
$scania->ausgabe(); // Gibt die Bezeichnung und Geschwindigkeit von "Scania" aus

// Objekt verändern
$vespa->beschleunigen(20); // Erhöht die Geschwindigkeit von "Vespa" um 20 km/h
$vespa->ausgabe(); // Gibt die Bezeichnung und die aktualisierte Geschwindigkeit von "Vespa" aus
?>
</body>
</html>
<!-- Der Code erstellt eine Klasse "Fahrzeug" mit privaten Eigenschaften für Geschwindigkeit und Bezeichnung sowie Funktionen zum Erstellen von Fahrzeug-Objekten, Ändern ihrer Geschwindigkeiten und Ausgeben ihrer Bezeichnungen und Geschwindigkeiten. Er erzeugt dann zwei Fahrzeug-Objekte, "Vespa Piaggio" und "Scania TS 360", gibt ihre Bezeichnungen und Geschwindigkeiten aus und ändert schließlich die Geschwindigkeit des "Vespa"-Objekts, bevor es die aktualisierte Geschwindigkeit ausgibt. -->