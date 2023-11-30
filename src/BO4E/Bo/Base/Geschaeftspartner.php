<?php namespace BO4E\Bo\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Bo\Geschaeftspartner */

/**
Mit diesem Objekt können Geschäftspartner übertragen werden.
Sowohl Unternehmen, als auch Privatpersonen können Geschäftspartner sein.
Hinweis: Marktteilnehmer haben ein eigenes BO, welches sich von diesem BO ableitet.
Hier sollte daher keine Zuordnung zu Marktrollen erfolgen.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Geschaeftspartner.svg" type="image/svg+xml"></object>

.. HINT::
    `Geschaeftspartner JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Geschaeftspartner.json>`_
*/

class Geschaeftspartner {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::GESCHAEFTSPARTNER;
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
	public ?string $name1 = null;
	public ?string $name2 = null;
	public ?string $name3 = null;
	public ?\BO4E\Com\Adresse $partneradresse = null;
	public ?string $umsatzsteuerId = null;
	public ?string $website = null;

}
