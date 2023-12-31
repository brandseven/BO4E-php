<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Angebotsposition */

/**
Unterhalb von Angebotsteilen sind die Angebotspositionen eingebunden.
Hier werden die angebotenen Bestandteile einzeln aufgeführt. Beispiel:
Positionsmenge: 4000 kWh
Positionspreis: 24,56 ct/kWh
Positionskosten: 982,40 EUR

.. raw:: html

    <object data="../_static/images/bo4e/com/Angebotsposition.svg" type="image/svg+xml"></object>

.. HINT::
    `Angebotsposition JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Angebotsposition.json>`_
*/

class Angebotsposition {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $positionsbezeichnung = null;
	public ?\BO4E\Com\Betrag $positionskosten = null;
	public ?\BO4E\Com\Menge $positionsmenge = null;
	public ?\BO4E\Com\Preis $positionspreis = null;

}
