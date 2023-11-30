<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Angebot */

/**
Mit diesem BO kann ein Versorgungsangebot zur Strom- oder Gasversorgung oder die Teilnahme an einer Ausschreibung
übertragen werden. Es können verschiedene Varianten enthalten sein (z.B. ein- und mehrjährige Laufzeit).
Innerhalb jeder Variante können Teile enthalten sein, die jeweils für eine oder mehrere Marktlokationen erstellt
werden.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Angebot.svg" type="image/svg+xml"></object>

.. HINT::
    `Angebot JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Angebot.json>`_
*/

class Angebot {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::ANGEBOT;
	public ?string $_version = '0.6.1rc14';
	public ?string $anfragereferenz = null;
	public ?\Datetime $angebotsdatum = null;
	public ?\BO4E\Geschaeftspartner $angebotsgeber = null;
	public ?\BO4E\Geschaeftspartner $angebotsnehmer = null;
	public ?string $angebotsnummer = null;
	public ?\Datetime $bindefrist = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	public ?\BO4E\Ansprechpartner $unterzeichnerAngebotsgeber = null;
	public ?\BO4E\Ansprechpartner $unterzeichnerAngebotsnehmer = null;
	/** @var \BO4E\Com\Angebotsvariante[] */
	public ?array $varianten = null;

}
