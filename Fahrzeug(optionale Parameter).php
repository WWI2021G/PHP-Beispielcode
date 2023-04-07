<!-- Der bereitgestellte PHP-Code erstellt eine Klasse "Fahrzeug" 
ähnlich wie der zuvor bereitgestellte Code, hat jedoch einige Änderungen 
im Konstruktor und bei der Objekterzeugung. Der Code wird unten erklärt: -->
<html>
<body>
<?php
// Definition der Klasse Fahrzeug
class Fahrzeug {
    // ...
    
    // Konstruktor mit optionalen Parametern
    function __construct($bez = "xxx", $ge = 0) {
        $this->bezeichnung = $bez;
        $this->geschwindigkeit = $ge;
    }
    
    // ...

    // Objekte der Klasse Fahrzeug erzeugen
    $vespa = new Fahrzeug("Vespa Piaggio"); // Erzeugt ein Fahrzeug-Objekt "Vespa" mit der Geschwindigkeit 0 (Standardwert)
    $scania = new Fahrzeug("", 62); // Erzeugt ein Fahrzeug-Objekt "Scania" mit der Geschwindigkeit 62, aber ohne Bezeichnung (Leerstring)
    $jeep = new Fahrzeug("Jeep Cherokee", 45); // Erzeugt ein Fahrzeug-Objekt "Jeep" mit der Geschwindigkeit 45
    $hyundai = new Fahrzeug(); // Erzeugt ein Fahrzeug-Objekt "Hyundai" mit der Standardbezeichnung "xxx" und der Geschwindigkeit 0

    // Objekte betrachten
    // ...
?>
</body>
</html>

<!-- Der Hauptunterschied in diesem Code besteht darin, dass der Konstruktor der Klasse "Fahrzeug" jetzt optionale Parameter hat. 
Wenn keine Werte für die Bezeichnung und Geschwindigkeit angegeben werden, werden Standardwerte ("xxx" für die Bezeichnung und 0 für die Geschwindigkeit) verwendet. 
Dies ermöglicht es, Fahrzeug-Objekte mit unterschiedlichen Kombinationen von Bezeichnungen und Geschwindigkeiten zu erstellen, wie in den Beispielen gezeigt.

Einige Unterschiede zwischen PHP und Java sind:

    Syntax: PHP und Java haben unterschiedliche Syntax, obwohl es viele Gemeinsamkeiten gibt. Zum Beispiel verwenden beide Sprachen Klassendefinitionen und Konstruktoren, 
    aber die Art, wie sie geschrieben werden, unterscheidet sich.

    Typisierung: PHP ist eine dynamisch typisierte Sprache, während Java statisch typisiert ist. 
    In PHP müssen Variablen nicht explizit deklariert werden, während in Java der Typ einer Variablen bei der Deklaration angegeben werden muss.

    Integration in Webseiten: PHP ist eine serverseitige Skriptsprache, die speziell für die 
    Webentwicklung entwickelt wurde und direkt in HTML integriert werden kann. Java hingegen ist eine allgemeine Programmiersprache und erfordert die 
    Verwendung von Technologien wie Servlets, JSP oder Frameworks wie Spring, um Webanwendungen zu erstellen.

    Speicherverwaltung: In Java wird die Speicherverwaltung von der Java Virtual Machine (JVM) mithilfe von Garbage Collection verwaltet. PHP hat ebenfalls eine Garbage 
    Collection, aber die Verwaltung des Speichers unterscheidet sich aufgrund der unterschiedlichen Laufzeitumgebungen.

    Objektorientierung: Beide Sprachen unterstützen objektorientierte Programmierung, aber PHP unterstützt auch prozedurale -->