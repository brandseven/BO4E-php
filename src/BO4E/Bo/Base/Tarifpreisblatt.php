<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Tarifpreisblatt */

/**
Tarifinformation mit Preisen, Aufschlägen und Berechnungssystematik

.. raw:: html

    <object data="../_static/images/bo4e/bo/Tarifpreisblatt.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarifpreisblatt JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Tarifpreisblatt.json>`_
*/

class Tarifpreisblatt {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::TARIFPREISBLATT;
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
	/** @var \BO4E\Com\AufAbschlag[] */
	public ?array $tarifAufAbschlaege = null;
	public ?\BO4E\Com\Tarifeinschraenkung $tarifeinschraenkung = null;
	/** @var \BO4E\Enum\Tarifmerkmal[] */
	public ?array $tarifmerkmale = null;
	/** @var \BO4E\Com\Tarifpreisposition[] */
	public ?array $tarifpreise = null;
	public ?\BO4E\Enum\Tariftyp $tariftyp = null;
	public ?\BO4E\Com\Vertragskonditionen $vertragskonditionen = null;
	public ?string $website = null;
	public ?\BO4E\Com\Zeitraum $zeitlicheGueltigkeit = null;

}
