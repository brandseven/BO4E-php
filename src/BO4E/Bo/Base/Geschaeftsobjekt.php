<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Geschaeftsobjekt */

/**
Das BO Geschäftsobjekt ist der Master für alle Geschäftsobjekte.
Alle Attribute, die hier in diesem BO enthalten sind, werden an alle BOs vererbt.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Geschaeftsobjekt.svg" type="image/svg+xml"></object>

.. HINT::
    `Geschaeftsobjekt JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Geschaeftsobjekt.json>`_
*/

class Geschaeftsobjekt {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::GESCHAEFTSOBJEKT;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;

}
