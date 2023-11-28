<?php namespace BO4E\Bo;

/** Das BO Ausschreibung dient zur detaillierten Darstellung von ausgeschriebenen Energiemengen in der Energiewirtschaft

.. raw:: html

    <object data="../_static/images/bo4e/bo/Ausschreibung.svg" type="image/svg+xml"></object>

.. HINT::
    `Ausschreibung JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Ausschreibung.json>`_ */

class Ausschreibung {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::AUSSCHREIUNG;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Com\Zeitraum $abgabefrist = null;
	public ?\BO4E\Geschaeftspartner $ausschreibender = null;
	public ?\BO4E\Enum\Ausschreibungsportal $ausschreibungportal = null;
	public ?string $ausschreibungsnummer = null;
	public ?\BO4E\Enum\Ausschreibungsstatus $ausschreibungsstatus = null;
	public ?\BO4E\Enum\Ausschreibungstyp $ausschreibungstyp = null;
	public ?\BO4E\Com\Zeitraum $bindefrist = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?boolean $istKostenpflichtig = null;
	/** @var \BO4E\Com\Ausschreibungslos[] */
	public ?array $lose = null;
	public ?\Datetime $veroeffentlichungszeitpunkt = null;
	public ?string $webseite = null;

}
