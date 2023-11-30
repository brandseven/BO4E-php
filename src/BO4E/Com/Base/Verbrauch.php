<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Verbrauch */

/**
Abbildung eines zeitlich abgegrenzten Verbrauchs

.. raw:: html

    <object data="../_static/images/bo4e/com/Verbrauch.svg" type="image/svg+xml"></object>

.. HINT::
    `Verbrauch JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Verbrauch.json>`_
*/

class Verbrauch {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Mengeneinheit $einheit = null;
	public ?\Datetime $enddatum = null;
	public ?string $obisKennzahl = null;
	public ?\Datetime $startdatum = null;
	public ?number $wert = null;
	public ?\BO4E\Enum\Wertermittlungsverfahren $wertermittlungsverfahren = null;

}
