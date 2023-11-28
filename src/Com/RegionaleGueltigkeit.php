<?php namespace BO4E\Com;

/** Mit dieser Komponente können regionale Gültigkeiten, z.B. für Tarife, Zu- und Abschläge und Preise definiert werden.

.. raw:: html

    <object data="../_static/images/bo4e/com/RegionaleGueltigkeit.svg" type="image/svg+xml"></object>

.. HINT::
    `RegionaleGueltigkeit JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/RegionaleGueltigkeit.json>`_ */

class RegionaleGueltigkeit {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\Gueltigkeitstyp $gueltigkeitstyp = null;
	/** @var \BO4E\Com\KriteriumWert[] */
	public ?array $kriteriumsWerte = null;

}
