<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Zeitreihenwert */

/**
Abbildung eines Zeitreihenwertes bestehend aus Zeitraum, Wert und Statusinformationen.

.. raw:: html

    <object data="../_static/images/bo4e/com/Zeitreihenwert.svg" type="image/svg+xml"></object>

.. HINT::
    `Zeitreihenwert JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zeitreihenwert.json>`_
*/

class Zeitreihenwert {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\Datetime $datumUhrzeitBis = null;
	public ?\Datetime $datumUhrzeitVon = null;
	public ?\BO4E\Enum\Messwertstatus $status = null;
	public ?\BO4E\Enum\Messwertstatuszusatz $statuszusatz = null;
	public ?number $wert = null;

}
