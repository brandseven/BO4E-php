<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Region */

/**
Modellierung einer Region als Menge von Kriterien, die eine Region beschreiben

.. raw:: html

    <object data="../_static/images/bo4e/bo/Region.svg" type="image/svg+xml"></object>

.. HINT::
    `Region JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Region.json>`_
*/

class Region {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::REGION;
	public ?string $_version = '0.6.1rc14';
	public ?string $bezeichnung = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	/** @var \BO4E\Com\Regionskriterium[] */
	public ?array $negativListe = null;
	/** @var \BO4E\Com\Regionskriterium[] */
	public ?array $positivListe = null;

}
