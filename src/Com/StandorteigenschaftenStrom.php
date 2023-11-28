<?php namespace BO4E\Com;

/** Standorteigenschaften der Sparte Strom

.. raw:: html

    <object data="../_static/images/bo4e/com/StandorteigenschaftenStrom.svg" type="image/svg+xml"></object>

.. HINT::
    `StandorteigenschaftenStrom JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/StandorteigenschaftenStrom.json>`_ */

class StandorteigenschaftenStrom {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $bilanzierungsgebietEic = null;
	public ?string $regelzone = null;
	public ?string $regelzoneEic = null;

}
