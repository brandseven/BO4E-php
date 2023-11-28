<?php namespace BO4E\Bo;

/** Object containing information about a Ansprechpartner

.. raw:: html

    <object data="../_static/images/bo4e/bo/Ansprechpartner.svg" type="image/svg+xml"></object>

.. HINT::
    `Ansprechpartner JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Ansprechpartner.json>`_ */

class Ansprechpartner {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::ANSPRECHPARTNER;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Com\Adresse $adresse = null;
	public ?\BO4E\Enum\Anrede $anrede = null;
	public ?string $eMailAdresse = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Geschaeftspartner $geschaeftspartner = null;
	public ?string $individuelleAnrede = null;
	public ?string $kommentar = null;
	public ?string $nachname = null;
	public ?\BO4E\Com\Rufnummer $rufnummer = null;
	public ?\BO4E\Enum\Titel $titel = null;
	public ?string $vorname = null;
	public ?\BO4E\Com\Zustaendigkeit $zustaendigkeit = null;

}
