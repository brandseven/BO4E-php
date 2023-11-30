<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\PositionsAufAbschlag */

/**
Differenzierung der zu betrachtenden Produkte anhand der preiserhöhenden (Aufschlag)
bzw. preisvermindernden (Abschlag) Zusatzvereinbarungen,
die individuell zu einem neuen oder bestehenden Liefervertrag abgeschlossen werden können.
Es können mehrere Auf-/Abschläge gleichzeitig ausgewählt werden.

.. raw:: html

    <object data="../_static/images/bo4e/com/PositionsAufAbschlag.svg" type="image/svg+xml"></object>

.. HINT::
    `PositionsAufAbschlag JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/PositionsAufAbschlag.json>`_
*/

class PositionsAufAbschlag {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\AufAbschlagstyp $aufAbschlagstyp = null;
	public ?\BO4E\Enum\Waehrungseinheit $aufAbschlagswaehrung = null;
	public ?number $aufAbschlagswert = null;
	public ?string $beschreibung = null;
	public ?string $bezeichnung = null;

}
