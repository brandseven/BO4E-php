<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Tarifpreisposition */

/**
Mit dieser Komponente können Tarifpreise verschiedener Typen abgebildet werden.

.. raw:: html

    <object data="../_static/images/bo4e/com/Tarifpreisposition.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarifpreisposition JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Tarifpreisposition.json>`_
*/

class Tarifpreisposition {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Mengeneinheit $bezugseinheit = null;
	public ?\BO4E\Enum\Waehrungseinheit $einheit = null;
	public ?\BO4E\Enum\Mengeneinheit $mengeneinheitstaffel = null;
	/** @var \BO4E\Com\Preisstaffel[] */
	public ?array $preisstaffeln = null;
	public ?\BO4E\Enum\Preistyp $preistyp = null;

}
