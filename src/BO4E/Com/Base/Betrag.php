<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Betrag */

/**
Die Komponente wird dazu verwendet, Summenbeträge (beispielsweise in Angeboten und Rechnungen) als Geldbeträge
abzubilden. Die Einheit ist dabei immer die Hauptwährung also Euro, Dollar etc…

.. raw:: html

    <object data="../_static/images/bo4e/com/Betrag.svg" type="image/svg+xml"></object>

.. HINT::
    `Betrag JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Betrag.json>`_
*/

class Betrag {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Waehrungscode $waehrung = null;
	public ?number $wert = null;

}
