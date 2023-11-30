<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Fremdkostenblock */

/**
Komponente zur Abbildung eines Kostenblocks in den Fremdkosten

.. raw:: html

    <object data="../_static/images/bo4e/com/Fremdkostenblock.svg" type="image/svg+xml"></object>

.. HINT::
    `Fremdkostenblock JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Fremdkostenblock.json>`_
*/

class Fremdkostenblock {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $kostenblockbezeichnung = null;
	/** @var \BO4E\Com\Fremdkostenposition[] */
	public ?array $kostenpositionen = null;
	public ?\BO4E\Com\Betrag $summeKostenblock = null;

}
