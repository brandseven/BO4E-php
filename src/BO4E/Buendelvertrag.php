<?php namespace BO4E;

/** Abbildung eines Bündelvertrags.
Es handelt sich hierbei um eine Liste von Einzelverträgen, die in einem Vertragsobjekt gebündelt sind.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Buendelvertrag.svg" type="image/svg+xml"></object>

.. HINT::
    `Buendelvertrag JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Buendelvertrag.json>`_ */

class Buendelvertrag {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::BUENDELVERTRAG;
	public ?string $_version = '0.6.1rc14';
	public ?string $beschreibung = null;
	/** @var \BO4E\Vertrag[] */
	public ?array $einzelvertraege = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	/** @var \BO4E\Com\Unterschrift[] */
	public ?array $unterzeichnervp1 = null;
	/** @var \BO4E\Com\Unterschrift[] */
	public ?array $unterzeichnervp2 = null;
	public ?\BO4E\Enum\Vertragsart $vertragsart = null;
	public ?string $vertragsbeginn = null;
	public ?string $vertragsende = null;
	/** @var \BO4E\Com\Vertragskonditionen[] */
	public ?array $vertragskonditionen = null;
	public ?string $vertragsnummer = null;
	public ?\BO4E\Geschaeftspartner $vertragspartner1 = null;
	public ?\BO4E\Geschaeftspartner $vertragspartner2 = null;
	public ?\BO4E\Enum\Vertragsstatus $vertragsstatus = null;

}
