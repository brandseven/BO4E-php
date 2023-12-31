<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Rechnung */

/**
Modell für die Abbildung von Rechnungen und Netznutzungsrechnungen im Kontext der Energiewirtschaft;

.. raw:: html

    <object data="../_static/images/bo4e/bo/Rechnung.svg" type="image/svg+xml"></object>

.. HINT::
    `Rechnung JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Rechnung.json>`_
*/

class Rechnung {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::RECHNUNG;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\Datetime $faelligkeitsdatum = null;
	public ?\BO4E\Com\Betrag $gesamtbrutto = null;
	public ?\BO4E\Com\Betrag $gesamtnetto = null;
	public ?\BO4E\Com\Betrag $gesamtsteuer = null;
	public ?boolean $istOriginal = null;
	public ?boolean $istSimuliert = null;
	public ?boolean $istStorno = null;
	public ?\BO4E\Bo\Marktlokation $marktlokation = null;
	public ?\BO4E\Bo\Messlokation $messlokation = null;
	public ?\BO4E\Enum\NetznutzungRechnungsart $netznutzungrechnungsart = null;
	public ?\BO4E\Enum\NetznutzungRechnungstyp $netznutzungrechnungstyp = null;
	public ?string $originalRechnungsnummer = null;
	public ?\BO4E\Com\Betrag $rabattBrutto = null;
	public ?\Datetime $rechnungsdatum = null;
	public ?\BO4E\Bo\Geschaeftspartner $rechnungsempfaenger = null;
	public ?\BO4E\Bo\Geschaeftspartner $rechnungsersteller = null;
	public ?string $rechnungsnummer = null;
	public ?\BO4E\Com\Zeitraum $rechnungsperiode = null;
	/** @var \BO4E\Com\Rechnungsposition[] */
	public ?array $rechnungspositionen = null;
	public ?\BO4E\Enum\Rechnungsstatus $rechnungsstatus = null;
	public ?string $rechnungstitel = null;
	public ?\BO4E\Enum\Rechnungstyp $rechnungstyp = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	/** @var \BO4E\Com\Steuerbetrag[] */
	public ?array $steuerbetraege = null;
	public ?\BO4E\Com\Betrag $vorausgezahlt = null;
	public ?\BO4E\Com\Betrag $zuZahlen = null;

}
