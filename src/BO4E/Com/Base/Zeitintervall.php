<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Zeitintervall */

/**
Abbildung für ein Zeitintervall. Die Abbildung eines Zeitintervalls.
Z.B. zur Anwendung als Raster in äquidistanten Zeitreihen/Lastgängen, beispielsweise 15 Minuten.

.. raw:: html

    <object data="../_static/images/bo4e/com/Zeitintervall.svg" type="image/svg+xml"></object>

.. HINT::
    `Zeitintervall JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Zeitintervall.json>`_
*/

class Zeitintervall {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?integer $wert = null;
	public ?\BO4E\Enum\Zeiteinheit $zeiteinheit = null;

}
