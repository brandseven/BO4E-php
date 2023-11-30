<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Regionskriterium */

/**
Komponente zur Abbildung eines Regionskriteriums

.. raw:: html

    <object data="../_static/images/bo4e/com/Regionskriterium.svg" type="image/svg+xml"></object>

.. HINT::
    `Regionskriterium JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Regionskriterium.json>`_
*/

class Regionskriterium {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Gueltigkeitstyp $gueltigkeitstyp = null;
	public ?\BO4E\Enum\Regionskriteriumtyp $regionskriteriumtyp = null;
	public ?string $wert = null;

}
