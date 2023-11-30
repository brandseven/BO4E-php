<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Tarifberechnungsparameter */

/**
In dieser Komponente sind die Berechnungsparameter für die Ermittlung der Tarifkosten zusammengefasst.
.. raw:: html

    <object data="../_static/images/bo4e/com/Tarifberechnungsparameter.svg" type="image/svg+xml"></object>

.. HINT::
    `Tarifberechnungsparameter JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Tarifberechnungsparameter.json>`_
*/

class Tarifberechnungsparameter {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Tarifkalkulationsmethode $berechnungsmethode = null;
	public ?\BO4E\Com\Preis $hoechstpreisHT = null;
	public ?\BO4E\Com\Preis $hoechstpreisNT = null;
	public ?boolean $istMesspreisInGrundpreisEnthalten = null;
	public ?boolean $istMesspreisZuBeruecksichtigen = null;
	public ?number $kwInklusive = null;
	public ?number $kwWeitereMengen = null;
	public ?\BO4E\Enum\Messpreistyp $messpreistyp = null;
	public ?\BO4E\Com\Preis $mindestpreis = null;
	/** @var \BO4E\Com\Tarifpreis[] */
	public ?array $zusatzpreise = null;

}
