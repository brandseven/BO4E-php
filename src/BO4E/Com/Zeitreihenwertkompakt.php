<?php namespace BO4E\Com;

/** Abbildung eines kompakten Zeitreihenwertes in dem ausschliesslich der Wert und Statusinformationen stehen.

.. raw:: html

    <object data="../_static/images/bo4e/com/Zeitreihenwertkompakt.svg" type="image/svg+xml"></object>

.. HINT::
    `Zeitreihenwertkompakt JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zeitreihenwertkompakt.json>`_ */

class Zeitreihenwertkompakt {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Messwertstatus $status = null;
	public ?\BO4E\Enum\Messwertstatuszusatz $statuszusatz = null;
	public ?number $wert = null;

}
