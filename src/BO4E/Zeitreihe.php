<?php namespace BO4E;

/** Abbildung einer allgemeinen Zeitreihe mit einem Wertvektor.
Die Werte können mit wahlfreier zeitlicher Distanz im Vektor abgelegt sein.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Zeitreihe.svg" type="image/svg+xml"></object>

.. HINT::
    `Zeitreihe JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Zeitreihe.json>`_ */

class Zeitreihe {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::ZEITREIHE;
	public ?string $beschreibung = null;
	public ?string $bezeichnung = null;
	public ?\BO4E\Enum\Mengeneinheit $einheit = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Enum\Medium $medium = null;
	public ?\BO4E\Enum\Messart $messart = null;
	public ?\BO4E\Enum\Messgroesse $messgroesse = null;
	public ?string $version = null;
	/** @var \BO4E\Com\Zeitreihenwert[] */
	public ?array $werte = null;
	public ?\BO4E\Enum\Wertermittlungsverfahren $wertherkunft = null;

}
