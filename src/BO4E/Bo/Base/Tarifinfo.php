<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Tarifinfo */

/**
Das BO Tarifinfo liefert die Merkmale, die einen Endkundentarif identifizierbar machen.
Dieses BO dient als Basis für weitere BOs mit erweiterten Anwendungsmöglichkeiten.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Tarifinfo.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarifinfo JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Tarifinfo.json>`_
*/

class Tarifinfo {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::TARIFINFO;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Marktteilnehmer $anbieter = null;
	public ?string $anbietername = null;
	public ?\Datetime $anwendungVon = null;
	public ?string $bemerkung = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Com\Energiemix $energiemix = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	/** @var \BO4E\Enum\Kundentyp[] */
	public ?array $kundentypen = null;
	public ?\BO4E\Enum\Registeranzahl $registeranzahl = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	/** @var \BO4E\Enum\Tarifmerkmal[] */
	public ?array $tarifmerkmale = null;
	public ?\BO4E\Enum\Tariftyp $tariftyp = null;
	public ?\BO4E\Com\Vertragskonditionen $vertragskonditionen = null;
	public ?string $website = null;
	public ?\BO4E\Com\Zeitraum $zeitlicheGueltigkeit = null;

}
