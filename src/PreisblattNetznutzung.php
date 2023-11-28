<?php namespace BO4E;

/** Die Variante des Preisblattmodells zur Abbildung der Netznutzungspreise

.. raw:: html

    <object data="../_static/images/bo4e/bo/PreisblattNetznutzung.svg" type="image/svg+xml"></object>

.. HINT::
    `PreisblattNetznutzung JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/PreisblattNetznutzung.json>`_ */

class PreisblattNetznutzung {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::PREISBLATTNETZNUTZUNG;
	public ?string $_version = '0.6.1rc14';
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Bilanzierungsmethode $bilanzierungsmethode = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeit = null;
	public ?\BO4E\Marktteilnehmer $herausgeber = null;
	public ?\BO4E\Enum\Kundengruppe $kundengruppe = null;
	public ?\BO4E\Enum\Netzebene $netzebene = null;
	/** @var \BO4E\Com\Preisposition[] */
	public ?array $preispositionen = null;
	public ?\BO4E\Enum\Preisstatus $preisstatus = null;
	public ?\BO4E\Enum\Sparte $sparte = null;

}
