<?php namespace BO4E;

/** Modell zur Abbildung eines Lastganges;
In diesem Modell werden die Messwerte mit einem vollständigen Zeitintervall angegeben und es bietet daher eine hohe
Flexibilität in der Übertragung jeglicher zeitlich veränderlicher Messgrössen.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Lastgang.svg" type="image/svg+xml"></object>

.. HINT::
    `Lastgang JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Lastgang.json>`_ */

class Lastgang {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::LASTGANG;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?string $lokationsId = null;
	public ?string $lokationstyp = null;
	public ?\BO4E\Enum\Mengeneinheit $messgroesse = null;
	public ?string $obisKennzahl = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	public ?string $version = null;
	/** @var \BO4E\Com\Zeitreihenwert[] */
	public ?array $werte = null;

}
