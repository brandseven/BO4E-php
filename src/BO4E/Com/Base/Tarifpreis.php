<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Tarifpreis */

/**
Abbildung eines Tarifpreises mit Preistyp und Beschreibung abgeleitet von COM Preis.

.. raw:: html

    <object data="../_static/images/bo4e/com/Tarifpreis.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarifpreis JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Tarifpreis.json>`_
*/

class Tarifpreis {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $beschreibung = null;
	public ?\BO4E\Enum\Mengeneinheit $bezugswert = null;
	public ?\BO4E\Enum\Waehrungseinheit $einheit = null;
	public ?\BO4E\Enum\Preistyp $preistyp = null;
	public ?\BO4E\Enum\Preisstatus $status = null;
	public ?number $wert = null;

}
