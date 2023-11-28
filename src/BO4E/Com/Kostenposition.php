<?php namespace BO4E\Com;

/** Diese Komponente wird zur Übertagung der Details zu einer Kostenposition verwendet.

.. raw:: html

    <object data="../_static/images/bo4e/com/Kostenposition.svg" type="image/svg+xml"></object>

.. HINT::
    `Kostenposition JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Kostenposition.json>`_ */

class Kostenposition {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $artikelbezeichnung = null;
	public ?string $artikeldetail = null;
	public ?\BO4E\Com\Betrag $betragKostenposition = null;
	public ?\Datetime $bis = null;
	public ?\BO4E\Com\Preis $einzelpreis = null;
	public ?\BO4E\Com\Menge $menge = null;
	public ?string $positionstitel = null;
	public ?\Datetime $von = null;
	public ?\BO4E\Com\Menge $zeitmenge = null;

}
