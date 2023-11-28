<?php namespace BO4E\Com;

/** Dient der Adressierung über die Liegenschafts-Information.

.. raw:: html

    <object data="../_static/images/bo4e/com/Katasteradresse.svg" type="image/svg+xml"></object>

.. HINT::
    `Katasteradresse JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Katasteradresse.json>`_ */

class Katasteradresse {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $flurstueck = null;
	public ?string $gemarkungFlur = null;

}
