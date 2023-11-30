<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Energiemenge */

/**
Abbildung von Mengen, die Lokationen zugeordnet sind

.. raw:: html

    <object data="../_static/images/bo4e/bo/Energiemenge.svg" type="image/svg+xml"></object>

.. HINT::
    `Energiemenge JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Energiemenge.json>`_
*/

class Energiemenge {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::ENERGIEMENGE;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\Verbrauch[] */
	public ?array $energieverbrauch = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?string $lokationsId = null;
	public ?\BO4E\Enum\Lokationstyp $lokationstyp = null;

}
