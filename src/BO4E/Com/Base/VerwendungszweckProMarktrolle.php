<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\VerwendungszweckProMarktrolle */

/**
Dient zur Identifizierung des Verwendungszwecks der Marktrolle an der Marktlokation, der die Werte zu übermitteln sind.

.. raw:: html

    <object data="../_static/images/bo4e/com/Verwendungszweck.svg" type="image/svg+xml"></object>

.. HINT::
    `Verwendungszweck JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Verwendungszweck.json>`_
*/

class VerwendungszweckProMarktrolle {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Marktrolle $marktrolle = null;
	/** @var \BO4E\Enum\Verwendungszweck[] */
	public ?array $zwecke = null;

}
