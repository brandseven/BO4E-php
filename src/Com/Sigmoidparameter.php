<?php namespace BO4E\Com;

/** Die Sigmoid-Funktion, beispielsweise zur Berechnung eines Leistungspreises hat die Form:
LP=A/(1+(P/B)^C)+D

.. raw:: html

    <object data="../_static/images/bo4e/com/Sigmoidparameter.svg" type="image/svg+xml"></object>

.. HINT::
    `Sigmoidparameter JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Sigmoidparameter.json>`_ */

class Sigmoidparameter {

	public ?number $A = null;
	public ?number $B = null;
	public ?number $C = null;
	public ?number $D = null;
	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';

}
