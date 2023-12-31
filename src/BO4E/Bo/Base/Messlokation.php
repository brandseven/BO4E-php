<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Messlokation */

/**
Object containing information about a Messlokation

.. raw:: html

    <object data="../_static/images/bo4e/bo/Messlokation.svg" type="image/svg+xml"></object>

.. HINT::
    `Messlokation JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Messlokation.json>`_
*/

class Messlokation {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::MESSLOKATION;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Com\Geokoordinaten $geoadresse = null;
	/** @var \BO4E\Bo\Geraet[] */
	public ?array $geraete = null;
	public ?string $grundzustaendigerMsbCodenr = null;
	public ?string $grundzustaendigerMsbimCodenr = null;
	public ?\BO4E\Com\Katasteradresse $katasterinformation = null;
	public ?\BO4E\Com\Adresse $messadresse = null;
	/** @var \BO4E\Com\Dienstleistung[] */
	public ?array $messdienstleistung = null;
	public ?string $messgebietnr = null;
	public ?string $messlokationsId = null;
	/** @var \BO4E\Bo\Zaehler[] */
	public ?array $messlokationszaehler = null;
	public ?\BO4E\Enum\Netzebene $netzebeneMessung = null;
	public ?\BO4E\Enum\Sparte $sparte = null;

}
