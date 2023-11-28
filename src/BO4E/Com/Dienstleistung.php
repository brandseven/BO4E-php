<?php namespace BO4E\Com;

/** Abbildung einer abrechenbaren Dienstleistung.

.. raw:: html

    <object data="../_static/images/bo4e/com/Dienstleistung.svg" type="image/svg+xml"></object>

.. HINT::
    `Dienstleistung JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Dienstleistung.json>`_ */

class Dienstleistung {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Dienstleistungstyp $dienstleistungstyp = null;

}
