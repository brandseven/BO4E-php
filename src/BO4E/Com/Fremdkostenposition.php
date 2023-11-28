<?php namespace BO4E\Com;

/** Eine Kostenposition im Bereich der Fremdkosten

.. raw:: html

    <object data="../_static/images/bo4e/com/Fremdkostenposition.svg" type="image/svg+xml"></object>

.. HINT::
    `Fremdkostenposition JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Fremdkostenposition.json>`_ */

class Fremdkostenposition {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $artikelbezeichnung = null;
	public ?string $artikeldetail = null;
	public ?\BO4E\Com\Betrag $betragKostenposition = null;
	public ?string $bis = null;
	public ?\BO4E\Com\Preis $einzelpreis = null;
	public ?string $gebietcodeEic = null;
	public ?string $linkPreisblatt = null;
	public ?string $marktpartnercode = null;
	public ?string $marktpartnername = null;
	public ?\BO4E\Com\Menge $menge = null;
	public ?string $positionstitel = null;
	public ?string $von = null;
	public ?\BO4E\Com\Menge $zeitmenge = null;

}
