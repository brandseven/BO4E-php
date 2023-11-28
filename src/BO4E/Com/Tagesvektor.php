<?php namespace BO4E\Com;

/** Abbildung eines Tagesvektors eines beliebigen äquidistanten Zeitrasters

.. raw:: html

    <object data="../_static/images/bo4e/com/Tagesvektor.svg" type="image/svg+xml"></object>

.. HINT::
    `Tagesvektor JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Tagesvektor.json>`_ */

class Tagesvektor {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?\Datetime $tag = null;
	/** @var \BO4E\Com\Zeitreihenwertkompakt[] */
	public ?array $werte = null;

}
