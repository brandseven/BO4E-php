<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\RegionalePreisgarantie */

/**
Abbildung einer Preisgarantie mit regionaler Abgrenzung

.. raw:: html

    <object data="../_static/images/bo4e/com/RegionalePreisgarantie.svg" type="image/svg+xml"></object>

.. HINT::
    `RegionalePreisgarantie JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/RegionalePreisgarantie.json>`_
*/

class RegionalePreisgarantie {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $beschreibung = null;
	public ?\BO4E\Enum\Preisgarantietyp $preisgarantietyp = null;
	public ?\BO4E\Com\RegionaleGueltigkeit $regionaleGueltigkeit = null;
	public ?\BO4E\Com\Zeitraum $zeitlicheGueltigkeit = null;

}
