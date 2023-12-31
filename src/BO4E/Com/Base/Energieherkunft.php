<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Energieherkunft */

/**
Abbildung einer Energieherkunft

.. raw:: html

    <object data="../_static/images/bo4e/com/Energieherkunft.svg" type="image/svg+xml"></object>

.. HINT::
    `Energieherkunft JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Energieherkunft.json>`_
*/

class Energieherkunft {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?number $anteilProzent = null;
	public ?\BO4E\Enum\Erzeugungsart $erzeugungsart = null;

}
