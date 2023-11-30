<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Zaehlwerk */

/**
Mit dieser Komponente werden Zählwerke modelliert.

.. raw:: html

    <object data="../_static/images/bo4e/com/Zaehlwerk.svg" type="image/svg+xml"></object>

.. HINT::
    `Zaehlwerk JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zaehlwerk.json>`_
*/

class Zaehlwerk {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?integer $anzahlAblesungen = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Mengeneinheit $einheit = null;
	public ?boolean $istAbrechnungsrelevant = null;
	public ?boolean $istSchwachlastfaehig = null;
	public ?boolean $istSteuerbefreit = null;
	public ?boolean $istUnterbrechbar = null;
	public ?\BO4E\Com\Konzessionsabgabe $konzessionsabgabe = null;
	public ?integer $nachkommastelle = null;
	public ?string $obisKennzahl = null;
	public ?\BO4E\Enum\Energierichtung $richtung = null;
	public ?\BO4E\Enum\Verbrauchsart $verbrauchsart = null;
	/** @var \BO4E\Com\VerwendungszweckProMarktrolle[] */
	public ?array $verwendungszwecke = null;
	public ?integer $vorkommastelle = null;
	public ?\BO4E\Enum\Waermenutzung $waermenutzung = null;
	public ?number $wandlerfaktor = null;
	public ?string $zaehlwerkId = null;
	public ?\BO4E\Com\Zaehlzeitregister $zaehlzeitregister = null;

}
