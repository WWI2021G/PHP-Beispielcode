<?php
/**
 * PHP-Datei zur Definition von benutzerdefinierten Fehlerklassen
 */

/**
 * Fehlerbehandlung beim Dateizugriff
 *
 * Diese Klasse erweitert die integrierte Exception-Klasse und ist speziell
 * für die Fehlerbehandlung beim Zugriff auf Dateien konzipiert.
 */
class DateiFehler extends Exception
{
    private $ausnahme;

    /**
     * Konstruktor für die DateiFehler-Klasse
     *
     * @param string $a Die Fehlermeldung, die bei der Ausnahme angezeigt wird
     */
    public function __construct($a)
    {
        $this->ausnahme = $a;
    }

    /**
     * Methode zur Ausgabe der Fehlermeldung
     *
     * Gibt die Fehlermeldung für diese DateiFehler-Ausnahme aus.
     */
    public function ausgabe()
    {
        echo "Dateifehler: $this->ausnahme<br />";
    }
}

/**
 * Fehlerbehandlung bei Mathematik
 *
 * Diese Klasse erweitert die integrierte Exception-Klasse und ist speziell
 * für die Fehlerbehandlung bei mathematischen Operationen konzipiert.
 */
class MathFehler extends Exception
{
    private $ausnahme;

    /**
     * Konstruktor für die MathFehler-Klasse
     *
     * @param string $a Die Fehlermeldung, die bei der Ausnahme angezeigt wird
     */
    public function __construct($a)
    {
        $this->ausnahme = $a;
    }

    /**
     * Methode zur Ausgabe der Fehlermeldung
     *
     * Gibt die Fehlermeldung für diese MathFehler-Ausnahme aus.
     */
    public function ausgabe()
    {
        echo "Math. Fehler: $this->ausnahme<br />";
    }
}
/*
Die Datei definiert zwei benutzerdefinierte Fehlerklassen, DateiFehler und MathFehler, die von der integrierten Exception-Klasse erben.
 Beide Klassen haben einen eigenen Konstruktor, der eine Fehlermeldung entgegennimmt und eine ausgabe()-Methode zum Anzeigen der 
 Fehlermeldung. Die Dokumentation erfolgt im VS-Code-konformen Format für PHP-Dateien, indem sie mehrzeilige Kommentarblöcke verwendet, 
 um die Klassen und ihre Methoden zu beschreiben.
 */
