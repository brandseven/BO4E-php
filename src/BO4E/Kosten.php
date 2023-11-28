<?php namespace BO4E;

/** Dieses BO wird zur Übertagung von hierarchischen Kostenstrukturen verwendet.
Die Kosten werden dabei in Kostenblöcke und diese wiederum in Kostenpositionen strukturiert.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Kosten.svg" type="image/svg+xml"></object>

.. HINT::
    `Kosten JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Kosten.json>`_ */

class Kosten {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::KOSTEN;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeit = null;
	/** @var \BO4E\Com\Kostenblock[] */
	public ?array $kostenbloecke = null;
	public ?\BO4E\Enum\Kostenklasse $kostenklasse = null;
	/** @var \BO4E\Com\Betrag[] */
	public ?array $summeKosten = null;

}
