<?php namespace BO4E;

/** Variante des Preisblattmodells zur Abbildung der Preise für wahlfreie Dienstleistungen

.. raw:: html

    <object data="../_static/images/bo4e/bo/PreisblattDienstleistung.svg" type="image/svg+xml"></object>

.. HINT::
    `PreisblattDienstleistung JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/PreisblattDienstleistung.json>`_ */

class PreisblattDienstleistung {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::PREISBLATTDIENSTLEISTUNG;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Dienstleistungstyp $basisdienstleistung = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Bilanzierungsmethode $bilanzierungsmethode = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Geraet $geraetedetails = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeit = null;
	public ?\BO4E\Marktteilnehmer $herausgeber = null;
	/** @var \BO4E\Enum\Dienstleistungstyp[] */
	public ?array $inklusiveDienstleistungen = null;
	/** @var \BO4E\Com\Preisposition[] */
	public ?array $preispositionen = null;
	public ?\BO4E\Enum\Preisstatus $preisstatus = null;
	public ?\BO4E\Enum\Sparte $sparte = null;

}
