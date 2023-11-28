<?php namespace BO4E;

/** Abbildung eines Tarifs mit regionaler Zuordnung von Preisen und Auf- und Abschlägen

.. raw:: html

    <object data="../_static/images/bo4e/bo/Tarif.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarif JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Tarif.json>`_ */

class Tarif {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::TARIF;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Marktteilnehmer $anbieter = null;
	public ?string $anbietername = null;
	public ?\Datetime $anwendungVon = null;
	public ?string $bemerkung = null;
	public ?\BO4E\Com\Tarifberechnungsparameter $berechnungsparameter = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Com\Energiemix $energiemix = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	/** @var \BO4E\Enum\Kundentyp[] */
	public ?array $kundentypen = null;
	public ?\BO4E\Com\Preisgarantie $preisgarantie = null;
	public ?\Datetime $preisstand = null;
	public ?\BO4E\Enum\Registeranzahl $registeranzahl = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	/** @var \BO4E\Com\AufAbschlagRegional[] */
	public ?array $tarifAufAbschlaege = null;
	public ?\BO4E\Com\Tarifeinschraenkung $tarifeinschraenkung = null;
	/** @var \BO4E\Enum\Tarifmerkmal[] */
	public ?array $tarifmerkmale = null;
	/** @var \BO4E\Com\TarifpreispositionProOrt[] */
	public ?array $tarifpreise = null;
	public ?\BO4E\Enum\Tariftyp $tariftyp = null;
	public ?\BO4E\Com\Vertragskonditionen $vertragskonditionen = null;
	public ?string $website = null;
	public ?\BO4E\Com\Zeitraum $zeitlicheGueltigkeit = null;

}
