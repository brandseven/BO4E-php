<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Steuerbetrag */

/**
Abbildung eines Steuerbetrages.

.. raw:: html

    <object data="../_static/images/bo4e/com/Steuerbetrag.svg" type="image/svg+xml"></object>

.. HINT::
    `Steuerbetrag JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Steuerbetrag.json>`_
*/

class Steuerbetrag {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?number $basiswert = null;
	public ?\BO4E\Enum\Steuerkennzeichen $steuerkennzeichen = null;
	public ?number $steuerwert = null;
	public ?\BO4E\Enum\Waehrungscode $waehrung = null;

}
