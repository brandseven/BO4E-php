<?php namespace BO4E\Com;

/** Über Rechnungspositionen werden Rechnungen strukturiert.
In einem Rechnungsteil wird jeweils eine in sich geschlossene Leistung abgerechnet.

.. raw:: html

    <object data="../_static/images/bo4e/com/Rechnungsposition.svg" type="image/svg+xml"></object>

.. HINT::
    `Rechnungsposition JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Rechnungsposition.json>`_ */

class Rechnungsposition {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $artikelId = null;
	public ?\BO4E\Enum\BDEWArtikelnummer $artikelnummer = null;
	public ?\BO4E\Com\Preis $einzelpreis = null;
	public ?\Datetime $lieferungBis = null;
	public ?\Datetime $lieferungVon = null;
	public ?string $lokationsId = null;
	public ?\BO4E\Com\Menge $positionsMenge = null;
	public ?integer $positionsnummer = null;
	public ?string $positionstext = null;
	public ?\BO4E\Com\Betrag $teilrabattNetto = null;
	public ?\BO4E\Com\Betrag $teilsummeNetto = null;
	public ?\BO4E\Com\Steuerbetrag $teilsummeSteuer = null;
	public ?\BO4E\Com\Menge $zeitbezogeneMenge = null;
	public ?\BO4E\Enum\Zeiteinheit $zeiteinheit = null;

}
