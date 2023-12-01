<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Zaehler */

/**
Object containing information about a meter/"Zaehler".

.. raw:: html

    <object data="../_static/images/bo4e/bo/Zaehler.svg" type="image/svg+xml"></object>

.. HINT::
    `Zaehler JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Zaehler.json>`_
*/

class Zaehler {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::ZAEHLER;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Befestigungsart $befestigungsart = null;
	public ?\Datetime $eichungBis = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	/** @var \BO4E\Bo\Geraet[] */
	public ?array $geraete = null;
	public ?boolean $istFernschaltbar = null;
	public ?\Datetime $letzteEichung = null;
	public ?\BO4E\Enum\Messwerterfassung $messwerterfassung = null;
	public ?\BO4E\Enum\Registeranzahl $registeranzahl = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	public ?\BO4E\Enum\Zaehlerauspraegung $zaehlerauspraegung = null;
	public ?\BO4E\Enum\Zaehlergroesse $zaehlergroesse = null;
	public ?\BO4E\Bo\Geschaeftspartner $zaehlerhersteller = null;
	public ?number $zaehlerkonstante = null;
	public ?string $zaehlernummer = null;
	public ?\BO4E\Enum\Zaehlertyp $zaehlertyp = null;
	public ?\BO4E\Enum\ZaehlertypSpezifikation $zaehlertypSpezifikation = null;
	/** @var \BO4E\Com\Zaehlwerk[] */
	public ?array $zaehlwerke = null;

}
