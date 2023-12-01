<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Angebotsteil */

/**
Mit dieser Komponente wird ein Teil einer Angebotsvariante abgebildet.
Hier werden alle Angebotspositionen aggregiert.
Angebotsteile werden im einfachsten Fall für eine Marktlokation oder Lieferstellenadresse erzeugt.
Hier werden die Mengen und Gesamtkosten aller Angebotspositionen zusammengefasst.
Eine Variante besteht mindestens aus einem Angebotsteil.

.. raw:: html

    <object data="../_static/images/bo4e/com/Angebotsteil.svg" type="image/svg+xml"></object>

.. HINT::
    `Angebotsteil JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Angebotsteil.json>`_
*/

class Angebotsteil {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $anfrageSubreferenz = null;
	public ?\BO4E\Com\Betrag $gesamtkostenangebotsteil = null;
	public ?\BO4E\Com\Menge $gesamtmengeangebotsteil = null;
	/** @var \BO4E\Bo\Marktlokation[] */
	public ?array $lieferstellenangebotsteil = null;
	public ?\BO4E\Com\Zeitraum $lieferzeitraum = null;
	/** @var \BO4E\Com\Angebotsposition[] */
	public ?array $positionen = null;

}
