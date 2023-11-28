<?php namespace BO4E\Com;

/** Preis für eine definierte Lieferung oder Leistung innerhalb eines Preisblattes

.. raw:: html

    <object data="../_static/images/bo4e/com/Preisposition.svg" type="image/svg+xml"></object>

.. HINT::
    `Preisposition JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Preisposition.json>`_ */

class Preisposition {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\BDEWArtikelnummer $bdewArtikelnummer = null;
	public ?\BO4E\Enum\Kalkulationsmethode $berechnungsmethode = null;
	public ?\BO4E\Enum\Mengeneinheit $bezugsgroesse = null;
	public ?number $freimengeBlindarbeit = null;
	public ?number $freimengeLeistungsfaktor = null;
	public ?string $gruppenartikelId = null;
	public ?string $leistungsbezeichnung = null;
	public ?\BO4E\Enum\Leistungstyp $leistungstyp = null;
	public ?\BO4E\Enum\Waehrungseinheit $preiseinheit = null;
	/** @var \BO4E\Com\Preisstaffel[] */
	public ?array $preisstaffeln = null;
	public ?\BO4E\Enum\Tarifzeit $tarifzeit = null;
	public ?\BO4E\Enum\Zeiteinheit $zeitbasis = null;
	public ?\BO4E\Enum\Bemessungsgroesse $zonungsgroesse = null;

}
