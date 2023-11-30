<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Standorteigenschaften */

/**
Modelliert die regionalen und spartenspezifischen Eigenschaften einer gegebenen Adresse.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Standorteigenschaften.svg" type="image/svg+xml"></object>

.. HINT::
    `Standorteigenschaften JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Standorteigenschaften.json>`_
*/

class Standorteigenschaften {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::STANDORTEIGENSCHAFTEN;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Com\StandorteigenschaftenGas $eigenschaftenGas = null;
	/** @var \BO4E\Com\StandorteigenschaftenStrom[] */
	public ?array $eigenschaftenStrom = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;

}
