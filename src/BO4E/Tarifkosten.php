<?php namespace BO4E;

/** Objekt zur Kommunikation von Kosten, die im Rahmen der Tarifanwendung entstehen

.. raw:: html

    <object data="../_static/images/bo4e/bo/Tarifkosten.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarifkosten JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Tarifkosten.json>`_ */

class Tarifkosten {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::TARIFKOSTEN;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Marktteilnehmer $anbieter = null;
	public ?string $anbietername = null;
	public ?\Datetime $anwendungVon = null;
	public ?string $bemerkung = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Com\Energiemix $energiemix = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Kosten $kosten = null;
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
