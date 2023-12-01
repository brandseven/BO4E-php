<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\PreisblattHardware */

/**
Variante des Preisblattmodells zur Abbildung der Preise für zusätzliche Hardware

.. raw:: html

    <object data="../_static/images/bo4e/bo/PreisblattHardware.svg" type="image/svg+xml"></object>

.. HINT::
    `PreisblattHardware JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/PreisblattHardware.json>`_
*/

class PreisblattHardware {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::PREISBLATTHARDWARE;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Bo\Geraet $basisgeraet = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Bilanzierungsmethode $bilanzierungsmethode = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeit = null;
	public ?\BO4E\Bo\Marktteilnehmer $herausgeber = null;
	/** @var \BO4E\Enum\Dienstleistungstyp[] */
	public ?array $inklusiveDienstleistungen = null;
	/** @var \BO4E\Bo\Geraet[] */
	public ?array $inklusiveGeraete = null;
	public ?\BO4E\Enum\Netzebene $messebene = null;
	/** @var \BO4E\Com\Preisposition[] */
	public ?array $preispositionen = null;
	public ?\BO4E\Enum\Preisstatus $preisstatus = null;
	public ?\BO4E\Enum\Sparte $sparte = null;

}
