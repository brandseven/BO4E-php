<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\AufAbschlagProOrt */

/**
Mit dieser Komponente können Auf- und Abschläge verschiedener Typen im Zusammenhang
mit örtlichen Gültigkeiten abgebildet werden.

.. raw:: html

    <object data="../_static/images/bo4e/com/AufAbschlagProOrt.svg" type="image/svg+xml"></object>

.. HINT::
    `AufAbschlagProOrt JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/AufAbschlagProOrt.json>`_
*/

class AufAbschlagProOrt {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $netznr = null;
	public ?string $ort = null;
	public ?string $postleitzahl = null;
	/** @var \BO4E\Com\AufAbschlagstaffelProOrt[] */
	public ?array $staffeln = null;

}
