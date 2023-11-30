<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Vertragsteil */

/**
Abbildung für einen Vertragsteil. Der Vertragsteil wird dazu verwendet,
eine vertragliche Leistung in Bezug zu einer Lokation (Markt- oder Messlokation) festzulegen.

.. raw:: html

    <object data="../_static/images/bo4e/com/Vertragsteil.svg" type="image/svg+xml"></object>

.. HINT::
    `Vertragsteil JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Vertragsteil.json>`_
*/

class Vertragsteil {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $lokation = null;
	public ?\BO4E\Com\Menge $maximaleAbnahmemenge = null;
	public ?\BO4E\Com\Menge $minimaleAbnahmemenge = null;
	public ?\BO4E\Com\Menge $vertraglichFixierteMenge = null;
	public ?\Datetime $vertragsteilbeginn = null;
	public ?\Datetime $vertragsteilende = null;

}
