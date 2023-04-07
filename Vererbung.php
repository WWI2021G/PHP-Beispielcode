<!-- Der bereitgestellte PHP-Code zeigt das Konzept der Klassenvererbung und Methodenüberschreibung in PHP. 
Hier ist eine Erklärung des Codes: -->
<html>
<body>
<?php
// Definition der Klasse Fahrzeug
class Fahrzeug {
    private $geschwindigkeit = 0;
    
    function beschleunigen($wert) {
        $this->geschwindigkeit += $wert;
    }

    function ausgabe() {
        echo "Geschwindigkeit: $this->geschwindigkeit<br />";
    }
}

// Definition der abgeleiteten Klasse PKW
class PKW extends Fahrzeug {
    private $insassen = 0;
    
    function einsteigen($anzahl) {
        $this->insassen += $anzahl;
    }

    function aussteigen($anzahl) {
        $this->insassen -= $anzahl;
    }

    // überschriebene Methode
    function ausgabe() {
        echo "Insassen: $this->insassen ";
        parent::ausgabe(); // geerbte Methode
    }
}

// Objekt der abgeleiteten Klasse PKW
$fiat = new PKW();
$fiat->ausgabe();
$fiat->einsteigen(3);
$fiat->beschleunigen(30);
$fiat->ausgabe();
$fiat->beschleunigen(-30);
$fiat->ausgabe();
$fiat->aussteigen(1);
$fiat->ausgabe();
?>
</body>
</html>
<!-- Der Code definiert eine Basisklasse "Fahrzeug" mit einer Geschwindigkeitseigenschaft und Methoden zum Beschleunigen und 
Ausgeben der Geschwindigkeit. Dann wird eine abgeleitete Klasse "PKW" erstellt, die von der Klasse "Fahrzeug" erbt. 
Die Klasse "PKW" fügt eine zusätzliche Eigenschaft "Insassen" hinzu und Methoden zum Ein- und Aussteigen von Insassen. 
Die Methode "ausgabe()" wird in der Klasse "PKW" überschrieben, um sowohl die Anzahl der Insassen als auch die Geschwindigkeit auszugeben.

Ein Objekt der abgeleiteten Klasse "PKW" namens "Fiat" wird erstellt und verschiedene Aktionen werden darauf ausgeführt, 
wie das Einsteigen von Insassen, das Beschleunigen und das Aussteigen von Insassen. Die Ausgabe zeigt die Änderungen in der 
Anzahl der Insassen und der Geschwindigkeit.

Parallelen zu Java:

    Klassenvererbung: Sowohl PHP als auch Java unterstützen die Klassenvererbung, bei der eine abgeleitete Klasse 
    die Eigenschaften und Methoden der Basisklasse erbt. In beiden Sprachen wird das Schlüsselwort "extends" verwendet, 
    um die Vererbung zu deklarieren.

    Überschreiben von Methoden: In beiden Sprachen können abgeleitete Klassen Methoden der Basisklasse überschreiben, 
    indem sie eine Methode mit demselben Namen und der gleichen Signatur definieren. In PHP wird die geerbte Methode mit 
    parent::method_name() aufgerufen, während in Java super.method_name() verwendet wird.

    Zugriffsmodifikatoren: Sowohl PHP als auch Java haben Zugriffsmodifikatoren wie private, protected und public, -->