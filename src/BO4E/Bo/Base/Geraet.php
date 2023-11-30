<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Geraet */

/**
Mit diesem BO werden alle Geräte modelliert, die keine Zähler sind.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Geraet.svg" type="image/svg+xml"></object>

.. HINT::
    `Geraet JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Geraet.json>`_
*/

class Geraet {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::GERAET;
	public ?string $_version = '0.6.1rc14';
	public ?string $bezeichnung = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Enum\Geraeteklasse $geraeteklasse = null;
	public ?string $geraetenummer = null;
	public ?\BO4E\Enum\Geraetetyp $geraetetyp = null;

}
