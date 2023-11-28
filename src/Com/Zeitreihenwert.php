<?php namespace BO4E\Com;

/** Abbildung eines Zeitreihenwertes bestehend aus Zeitraum, Wert und Statusinformationen.

.. raw:: html

    <object data="../_static/images/bo4e/com/Zeitreihenwert.svg" type="image/svg+xml"></object>

.. HINT::
    `Zeitreihenwert JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zeitreihenwert.json>`_ */

class Zeitreihenwert {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $datumUhrzeitBis = null;
	public ?string $datumUhrzeitVon = null;
	public ?\BO4E\Enum\Messwertstatus $status = null;
	public ?\BO4E\Enum\Messwertstatuszusatz $statuszusatz = null;
	public ?number $wert = null;

}
