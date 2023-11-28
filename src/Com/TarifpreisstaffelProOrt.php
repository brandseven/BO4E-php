<?php namespace BO4E\Com;

/** Gibt die Staffelgrenzen der jeweiligen Preise an

.. raw:: html

    <object data="../_static/images/bo4e/com/TarifpreisstaffelProOrt.svg" type="image/svg+xml"></object>

.. HINT::
    `TarifpreisstaffelProOrt JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/TarifpreisstaffelProOrt.json>`_ */

class TarifpreisstaffelProOrt {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?number $arbeitspreis = null;
	public ?number $arbeitspreisNT = null;
	public ?number $grundpreis = null;
	public ?number $staffelgrenzeBis = null;
	public ?number $staffelgrenzeVon = null;

}
