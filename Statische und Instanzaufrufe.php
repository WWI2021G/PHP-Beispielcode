<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Math Class Beispiel</title>
</head>
<body>
<?php
/**
 * Klasse Math
 * 
 * Diese Klasse zeigt ein Beispiel für eine mathematische Klasse mit
 * einer Konstante, einer privaten Eigenschaft, einer öffentlichen
 * statischen Eigenschaft und verschiedenen Methoden.
 */
class Math {
    const pi = 3.1415926;
    private $id;
    public static $nummer = 0;

    /**
     * Konstruktor
     * 
     * Erhöht die statische Eigenschaft $nummer bei jedem
     * erstellten Objekt und weist sie der privaten Eigenschaft
     * $id zu.
     */
    public function __construct() {
        self::$nummer = self::$nummer + 1;
        $this->id = self::$nummer;
    }

    /**
     * Quadrat-Methode
     * 
     * Eine statische Methode, die das Quadrat eines übergebenen
     * Wertes zurückgibt.
     * 
     * @param float $p Der Wert, dessen Quadrat berechnet werden soll
     * @return float Das Quadrat des übergebenen Wertes
     */
    public static function quadrat($p) {
        return $p * $p;
    }

    /**
     * Ausgabe-Methode
     * 
     * Gibt die ID des Objekts, den Wert der Konstante pi und das
     * Quadrat von 3.2 aus.
     */
    public function aus() {
        echo "Nr.: $this->id, " . self::pi . "<br />";
        echo self::quadrat(3.2) . "<br />";
    }
}

$z = 2.5;

// Ausgabe des Quadrats von 2.5
echo Math::quadrat($z) . "<p> </p>";

// Erstellung eines neuen Math-Objekts und Ausgabe der Informationen
$x = new Math();
$x->aus();
echo "Anzahl: " . Math::$nummer . "<p> </p>";

// Erstellung eines weiteren Math-Objekts und Ausgabe der Informationen
$y = new Math();
$y->aus();
echo "Anzahl: " . Math::$nummer . "<p> </p>";

// Ausgabe der Konstante pi direkt von der Klasse
echo Math::pi;
?>
</body>
</html>
