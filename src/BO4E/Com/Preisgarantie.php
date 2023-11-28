<?php namespace BO4E\Com;

/** Definition für eine Preisgarantie mit der Möglichkeit verschiedener Ausprägungen.

.. raw:: html

    <object data="../_static/images/bo4e/com/Preisgarantie.svg" type="image/svg+xml"></object>

.. HINT::
    `Preisgarantie JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Preisgarantie.json>`_ */

class Preisgarantie {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $beschreibung = null;
	public ?\BO4E\Enum\Preisgarantietyp $preisgarantietyp = null;
	public ?\BO4E\Com\Zeitraum $zeitlicheGueltigkeit = null;

}
