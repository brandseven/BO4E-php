<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\RegionalePreisstaffel */

/**
Abbildung einer Preisstaffel mit regionaler Abgrenzung

.. raw:: html

    <object data="../_static/images/bo4e/com/RegionalePreisstaffel.svg" type="image/svg+xml"></object>

.. HINT::
    `RegionalePreisstaffel JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/RegionalePreisstaffel.json>`_
*/

class RegionalePreisstaffel {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?number $einheitspreis = null;
	public ?\BO4E\Com\RegionaleGueltigkeit $regionaleGueltigkeit = null;
	public ?\BO4E\Com\Sigmoidparameter $sigmoidparameter = null;
	public ?number $staffelgrenzeBis = null;
	public ?number $staffelgrenzeVon = null;

}
