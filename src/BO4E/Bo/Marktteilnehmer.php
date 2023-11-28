<?php namespace BO4E\Bo;

/** Objekt zur Aufnahme der Information zu einem Marktteilnehmer

.. raw:: html

    <object data="../_static/images/bo4e/bo/Marktteilnehmer.svg" type="image/svg+xml"></object>

.. HINT::
    `Marktteilnehmer JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Marktteilnehmer.json>`_ */

class Marktteilnehmer {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::MARKTTEILNEHMER;
	public ?string $_version = '0.6.1rc14';
	public ?string $amtsgericht = null;
	public ?\BO4E\Enum\Anrede $anrede = null;
	public ?string $eMailAdresse = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	/** @var \BO4E\Enum\Geschaeftspartnerrolle[] */
	public ?array $geschaeftspartnerrolle = null;
	public ?string $glaeubigerId = null;
	public ?string $hrnummer = null;
	public ?boolean $istGewerbe = null;
	/** @var \BO4E\Enum\Kontaktart[] */
	public ?array $kontaktweg = null;
	public ?string $makoadresse = null;
	public ?\BO4E\Enum\Marktrolle $marktrolle = null;
	public ?string $name1 = null;
	public ?string $name2 = null;
	public ?string $name3 = null;
	public ?\BO4E\Com\Adresse $partneradresse = null;
	public ?string $rollencodenummer = null;
	public ?\BO4E\Enum\Rollencodetyp $rollencodetyp = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	public ?string $umsatzsteuerId = null;
	public ?string $website = null;

}
