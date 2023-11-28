<?php namespace BO4E\Com;

/** Mit dieser Komponente werden Messlokationen zu Marktlokationen zugeordnet.
Dabei kann eine arithmetische Operation (Addition, Subtraktion, Multiplikation, Division) angegeben werden,
mit der die Messlokation zum Verbrauch der Marktlokation beiträgt.

.. raw:: html

    <object data="../_static/images/bo4e/com/Messlokationszuordnung.svg" type="image/svg+xml"></object>

.. HINT::
    `Messlokationszuordnung JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Messlokationszuordnung.json>`_ */

class Messlokationszuordnung {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\BO4E\Enum\ArithmetischeOperation $arithmetik = null;
	public ?string $gueltigBis = null;
	public ?string $gueltigSeit = null;
	public ?string $messlokationsId = null;

}
