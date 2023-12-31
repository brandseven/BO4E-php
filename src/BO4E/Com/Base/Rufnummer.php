<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Rufnummer */

/**
Contains information to call or fax someone

.. raw:: html

    <object data="../_static/images/bo4e/com/Rufnummer.svg" type="image/svg+xml"></object>

.. HINT::
    `Rufnummer JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Rufnummer.json>`_
*/

class Rufnummer {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Rufnummernart $nummerntyp = null;
	public ?string $rufnummer = null;

}
