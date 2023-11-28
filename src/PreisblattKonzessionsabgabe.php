<?php namespace BO4E;

/** Die Variante des Preisblattmodells zur Abbildung von allgemeinen Abgaben

.. raw:: html

    <object data="../_static/images/bo4e/bo/PreisblattKonzessionsabgabe.svg" type="image/svg+xml"></object>

.. HINT::
    `PreisblattKonzessionsabgabe JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/PreisblattKonzessionsabgabe.json>`_ */

class PreisblattKonzessionsabgabe {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::PREISBLATTKONZESSIONSABGABE;
	public ?string $_version = '0.6.1rc14';
	public ?string $bezeichnung = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeit = null;
	public ?\BO4E\Marktteilnehmer $herausgeber = null;
	public ?\BO4E\Enum\KundengruppeKA $kundengruppeKA = null;
	/** @var \BO4E\Com\Preisposition[] */
	public ?array $preispositionen = null;
	public ?\BO4E\Enum\Preisstatus $preisstatus = null;
	public ?\BO4E\Enum\Sparte $sparte = null;

}
