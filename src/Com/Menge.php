<?php namespace BO4E\Com;

/** Abbildung einer Menge mit Wert und Einheit.

.. raw:: html

    <object data="../_static/images/bo4e/com/Menge.svg" type="image/svg+xml"></object>

.. HINT::
    `Menge JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Menge.json>`_ */

class Menge {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Mengeneinheit $einheit = null;
	public ?number $wert = null;

}
