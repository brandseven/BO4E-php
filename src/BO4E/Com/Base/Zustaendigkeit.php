<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Zustaendigkeit */

/**
Enthält die zeitliche Zuordnung eines Ansprechpartners zu Abteilungen und Zuständigkeiten.

.. raw:: html

    <object data="../_static/images/bo4e/com/Zustaendigkeit.svg" type="image/svg+xml"></object>

.. HINT::
    `Zustaendigkeit JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zustaendigkeit.json>`_
*/

class Zustaendigkeit {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $abteilung = null;
	public ?string $jobtitel = null;
	public ?\BO4E\Enum\Themengebiet $themengebiet = null;

}
