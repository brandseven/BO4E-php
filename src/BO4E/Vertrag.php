<?php namespace BO4E;

/** Modell für die Abbildung von Vertragsbeziehungen;
Das Objekt dient dazu, alle Arten von Verträgen, die in der Energiewirtschaft Verwendung finden, abzubilden.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Vertrag.svg" type="image/svg+xml"></object>

.. HINT::
    `Vertrag JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Vertrag.json>`_ */

class Vertrag {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::VERTRAG;
	public ?string $_version = '0.6.1rc14';
	public ?string $beschreibung = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	/** @var \BO4E\Com\Unterschrift[] */
	public ?array $unterzeichnervp1 = null;
	/** @var \BO4E\Com\Unterschrift[] */
	public ?array $unterzeichnervp2 = null;
	public ?\BO4E\Enum\Vertragsart $vertragsart = null;
	public ?\Datetime $vertragsbeginn = null;
	public ?\Datetime $vertragsende = null;
	public ?\BO4E\Com\Vertragskonditionen $vertragskonditionen = null;
	public ?string $vertragsnummer = null;
	public ?\BO4E\Geschaeftspartner $vertragspartner1 = null;
	public ?\BO4E\Geschaeftspartner $vertragspartner2 = null;
	public ?\BO4E\Enum\Vertragsstatus $vertragsstatus = null;
	/** @var \BO4E\Com\Vertragsteil[] */
	public ?array $vertragsteile = null;

}
