<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Unterschrift */

/**
Modellierung einer Unterschrift, z.B. für Verträge, Angebote etc.

.. raw:: html

    <object data="../_static/images/bo4e/com/Unterschrift.svg" type="image/svg+xml"></object>

.. HINT::
    `Unterschrift JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Unterschrift.json>`_
*/

class Unterschrift {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\Datetime $datum = null;
	public ?string $name = null;
	public ?string $ort = null;

}
