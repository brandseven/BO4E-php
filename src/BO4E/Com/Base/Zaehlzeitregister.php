<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Zaehlzeitregister */

/**
Mit dieser Komponente werden Zählzeitregister modelliert. Ein Zählzeitregister beschreibt eine erweiterte Definition der Zählzeit
in Bezug auf ein Register. Dabei werden alle Codes dazu vom Netzbetreiber vergeben.

.. raw:: html

    <object data="../_static/images/bo4e/com/Zaehlzeitregister.svg" type="image/svg+xml"></object>

.. HINT::
    `Zaehlzeitregister JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zaehlzeitregister.json>`_
*/

class Zaehlzeitregister {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?boolean $istSchwachlastfaehig = null;
	public ?string $zaehlzeitDefinition = null;
	public ?string $zaehlzeitRegister = null;

}
