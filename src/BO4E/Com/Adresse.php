<?php namespace BO4E\Com;

/** Contains an address that can be used for most purposes.

.. raw:: html

    <object data="../_static/images/bo4e/com/Adresse.svg" type="image/svg+xml"></object>

.. HINT::
    `Adresse JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Adresse.json>`_ */

class Adresse {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $adresszusatz = null;
	public ?string $coErgaenzung = null;
	public ?string $hausnummer = null;
	public ?\BO4E\Enum\Landescode $landescode = null;
	public ?string $ort = null;
	public ?string $ortsteil = null;
	public ?string $postfach = null;
	public ?string $postleitzahl = null;
	public ?string $strasse = null;

}
