<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Zeitraum */

/**
Diese Komponente wird zur Abbildung von Zeiträumen in Form von Dauern oder der Angabe von Start und Ende verwendet.
Es muss daher eine der drei Möglichkeiten angegeben sein:
- Einheit und Dauer oder
- Zeitraum: Startdatum bis Enddatum oder
- Zeitraum: Startzeitpunkt (Datum und Uhrzeit) bis Endzeitpunkt (Datum und Uhrzeit)

.. raw:: html

    <object data="../_static/images/bo4e/com/Zeitraum.svg" type="image/svg+xml"></object>

.. HINT::
    `Zeitraum JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zeitraum.json>`_
*/

class Zeitraum {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?number $dauer = null;
	public ?\BO4E\Enum\Zeiteinheit $einheit = null;
	public ?\Datetime $enddatum = null;
	public ?\Datetime $endzeitpunkt = null;
	public ?\Datetime $startdatum = null;
	public ?\Datetime $startzeitpunkt = null;

}
