<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Preisblatt */

/**
Das allgemeine Modell zur Abbildung von Preisen;
Davon abgeleitet können, über die Zuordnung identifizierender Merkmale, spezielle Preisblatt-Varianten modelliert
werden.

Die jeweiligen Sätze von Merkmalen sind in der Grafik ergänzt worden und stellen jeweils eine Ausprägung für die
verschiedenen Anwendungsfälle der Preisblätter dar.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Preisblatt.svg" type="image/svg+xml"></object>

.. HINT::
    `Preisblatt JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Preisblatt.json>`_
*/

class Preisblatt {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::PREISBLATT;
	public ?string $_version = '0.6.1rc14';
	public ?string $bezeichnung = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeit = null;
	public ?\BO4E\Bo\Marktteilnehmer $herausgeber = null;
	/** @var \BO4E\Com\Preisposition[] */
	public ?array $preispositionen = null;
	public ?\BO4E\Enum\Preisstatus $preisstatus = null;
	public ?\BO4E\Enum\Sparte $sparte = null;

}
