<?php namespace BO4E\Com;

/** Abbildung eines Preises mit Wert, Einheit, Bezugswert und Status.

.. raw:: html

    <object data="../_static/images/bo4e/com/Preis.svg" type="image/svg+xml"></object>

.. HINT::
    `Preis JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Preis.json>`_ */

class Preis {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Mengeneinheit $bezugswert = null;
	public ?\BO4E\Enum\Waehrungseinheit $einheit = null;
	public ?\BO4E\Enum\Preisstatus $status = null;
	public ?number $wert = null;

}
