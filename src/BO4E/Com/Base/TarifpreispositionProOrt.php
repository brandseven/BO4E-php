<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\TarifpreispositionProOrt */

/**
Mit dieser Komponente können Tarifpreise verschiedener Typen abgebildet werden

.. raw:: html

    <object data="../_static/images/bo4e/com/TarifpreispositionProOrt.svg" type="image/svg+xml"></object>

.. HINT::
    `TarifpreispositionProOrt JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/TarifpreispositionProOrt.json>`_
*/

class TarifpreispositionProOrt {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $netznr = null;
	public ?string $ort = null;
	public ?string $postleitzahl = null;
	/** @var \BO4E\Com\TarifpreisstaffelProOrt[] */
	public ?array $preisstaffeln = null;

}
