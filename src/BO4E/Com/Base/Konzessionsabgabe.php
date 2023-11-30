<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Konzessionsabgabe */

/**
Diese Komponente wird zur Übertagung der Details zu einer Konzessionsabgabe verwendet.

.. raw:: html

    <object data="../_static/images/bo4e/com/Konzessionsabgabe.svg" type="image/svg+xml"></object>

.. HINT::
    `Konzessionsabgabe JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Konzessionsabgabe.json>`_
*/

class Konzessionsabgabe {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $kategorie = null;
	public ?number $kosten = null;
	public ?\BO4E\Enum\AbgabeArt $satz = null;

}
