<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\AufAbschlag */

/**
Modell für die preiserhöhenden (Aufschlag) bzw. preisvermindernden (Abschlag) Zusatzvereinbarungen,
die individuell zu einem neuen oder bestehenden Liefervertrag abgeschlossen wurden.

.. raw:: html

    <object data="../_static/images/bo4e/com/AufAbschlag.svg" type="image/svg+xml"></object>

.. HINT::
    `AufAbschlag JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/AufAbschlag.json>`_
*/

class AufAbschlag {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\AufAbschlagstyp $aufAbschlagstyp = null;
	public ?\BO4E\Enum\AufAbschlagsziel $aufAbschlagsziel = null;
	public ?string $beschreibung = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Waehrungseinheit $einheit = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeitszeitraum = null;
	/** @var \BO4E\Com\Preisstaffel[] */
	public ?array $staffeln = null;
	public ?string $website = null;

}
