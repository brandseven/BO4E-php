<?php namespace BO4E\Com;

/** Mit dieser Komponente können Auf- und Abschläge verschiedener Typen im Zusammenhang mit regionalen Gültigkeiten
abgebildet werden.
Hier sind auch die Auswirkungen auf verschiedene Tarifparameter modelliert, die sich durch die Auswahl eines Auf-
oder Abschlags ergeben.

.. raw:: html

    <object data="../_static/images/bo4e/com/RegionalerAufAbschlag.svg" type="image/svg+xml"></object>

.. HINT::
    `RegionalerAufAbschlag JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/RegionalerAufAbschlag.json>`_ */

class RegionalerAufAbschlag {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\AufAbschlagstyp $aufAbschlagstyp = null;
	public ?\BO4E\Enum\AufAbschlagsziel $aufAbschlagsziel = null;
	public ?string $beschreibung = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Waehrungseinheit $einheit = null;
	public ?\BO4E\Com\Tarifeinschraenkung $einschraenkungsaenderung = null;
	public ?\BO4E\Com\Energiemix $energiemixaenderung = null;
	public ?\BO4E\Com\Preisgarantie $garantieaenderung = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeitszeitraum = null;
	/** @var \BO4E\Com\RegionalePreisstaffel[] */
	public ?array $staffeln = null;
	public ?string $tarifnamensaenderungen = null;
	public ?\BO4E\Com\Vertragskonditionen $vertagskonditionsaenderung = null;
	/** @var string[] */
	public ?array $voraussetzungen = null;
	public ?string $website = null;
	/** @var string[] */
	public ?array $zusatzprodukte = null;

}
