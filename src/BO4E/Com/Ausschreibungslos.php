<?php namespace BO4E\Com;

/** Eine Komponente zur Abbildung einzelner Lose einer Ausschreibung

.. raw:: html

    <object data="../_static/images/bo4e/com/Ausschreibungslos.svg" type="image/svg+xml"></object>

.. HINT::
    `Ausschreibungslos JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Ausschreibungslos.json>`_ */

class Ausschreibungslos {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?integer $anzahlLieferstellen = null;
	public ?string $bemerkung = null;
	public ?string $betreutDurch = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Sparte $energieart = null;
	public ?\BO4E\Com\Menge $gesamtMenge = null;
	/** @var \BO4E\Com\Ausschreibungsdetail[] */
	public ?array $lieferstellen = null;
	public ?\BO4E\Com\Zeitraum $lieferzeitraum = null;
	public ?string $losnummer = null;
	public ?\BO4E\Enum\Preismodell $preismodell = null;
	public ?\BO4E\Com\Zeitraum $wiederholungsintervall = null;
	public ?\BO4E\Com\Zeitraum $wunschKuendingungsfrist = null;
	public ?\BO4E\Com\Menge $wunschMaximalmenge = null;
	public ?\BO4E\Com\Menge $wunschMindestmenge = null;
	public ?\BO4E\Enum\Rechnungslegung $wunschRechnungslegung = null;
	public ?\BO4E\Enum\Vertragsform $wunschVertragsform = null;
	public ?\BO4E\Com\Zeitraum $wunschZahlungsziel = null;

}
