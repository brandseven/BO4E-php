<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Tarifeinschraenkung */

/**
Mit dieser Komponente werden Einschränkungen für die Anwendung von Tarifen modelliert.

.. raw:: html

    <object data="../_static/images/bo4e/com/Tarifeinschraenkung.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarifeinschraenkung JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Tarifeinschraenkung.json>`_
*/

class Tarifeinschraenkung {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\Menge[] */
	public ?array $einschraenkungleistung = null;
	/** @var \BO4E\Geraet[] */
	public ?array $einschraenkungzaehler = null;
	/** @var \BO4E\Enum\Voraussetzungen[] */
	public ?array $voraussetzungen = null;
	/** @var string[] */
	public ?array $zusatzprodukte = null;

}
