<?php namespace BO4E\Com\Base;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */
/** FOR CUSTOM CHANGES USE @see \BO4E\Com\Energiemix */

/**
Zusammensetzung der gelieferten Energie aus den verschiedenen Primärenergieformen.

.. raw:: html

    <object data="../_static/images/bo4e/com/Energiemix.svg" type="image/svg+xml"></object>

.. HINT::
    `Energiemix JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Energiemix.json>`_
*/

class Energiemix {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\Energieherkunft[] */
	public ?array $anteil = null;
	public ?number $atommuell = null;
	public ?string $bemerkung = null;
	public ?string $bezeichnung = null;
	public ?number $co2Emission = null;
	public ?\BO4E\Enum\Sparte $energieart = null;
	public ?integer $energiemixnummer = null;
	public ?integer $gueltigkeitsjahr = null;
	public ?boolean $istInOekoTopTen = null;
	/** @var \BO4E\Enum\Oekolabel[] */
	public ?array $oekolabel = null;
	/** @var \BO4E\Enum\Oekozertifikat[] */
	public ?array $oekozertifikate = null;
	public ?string $website = null;

}
