<?php namespace BO4E\Com;

/** Mit dieser Komponente werden mehrere Kostenpositionen zusammengefasst.

.. raw:: html

    <object data="../_static/images/bo4e/com/Kostenblock.svg" type="image/svg+xml"></object>

.. HINT::
    `Kostenblock JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Kostenblock.json>`_ */

class Kostenblock {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $kostenblockbezeichnung = null;
	/** @var \BO4E\Com\Kostenposition[] */
	public ?array $kostenpositionen = null;
	public ?\BO4E\Com\Betrag $summeKostenblock = null;

}
