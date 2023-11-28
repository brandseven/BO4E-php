<?php namespace BO4E\Com;

/** Abbildung für Vertragskonditionen. Die Komponente wird sowohl im Vertrag als auch im Tarif verwendet.

.. raw:: html

    <object data="../_static/images/bo4e/com/Vertragskonditionen.svg" type="image/svg+xml"></object>

.. HINT::
    `Vertragskonditionen JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Vertragskonditionen.json>`_ */

class Vertragskonditionen {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Com\Zeitraum $abschlagszyklus = null;
	public ?number $anzahlAbschlaege = null;
	public ?string $beschreibung = null;
	public ?\BO4E\Com\Zeitraum $kuendigungsfrist = null;
	public ?\BO4E\Com\Zeitraum $vertragslaufzeit = null;
	public ?\BO4E\Com\Zeitraum $vertragsverlaengerung = null;

}
