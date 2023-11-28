<?php namespace BO4E\Com;

/** Führt die verschiedenen Ausprägungen der Angebotsberechnung auf

.. raw:: html

    <object data="../_static/images/bo4e/com/Angebotsvariante.svg" type="image/svg+xml"></object>

.. HINT::
    `Angebotsvariante JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Angebotsvariante.json>`_ */

class Angebotsvariante {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Angebotsstatus $angebotsstatus = null;
	public ?string $bindefrist = null;
	public ?string $erstellungsdatum = null;
	public ?\BO4E\Com\Betrag $gesamtkosten = null;
	public ?\BO4E\Com\Menge $gesamtmenge = null;
	/** @var \BO4E\Com\Angebotsteil[] */
	public ?array $teile = null;

}
