<?php namespace BO4E\Com;

/** Mit dieser Komponente können Kriterien und deren Werte definiert werden

.. raw:: html

    <object data="../_static/images/bo4e/com/KriteriumWert.svg" type="image/svg+xml"></object>

.. HINT::
    `KriteriumWert JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/KriteriumWert.json>`_ */

class KriteriumWert {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Tarifregionskriterium $kriterium = null;
	public ?string $wert = null;

}
