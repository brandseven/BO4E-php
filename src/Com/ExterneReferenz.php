<?php namespace BO4E\Com;

/** Viele Datenobjekte weisen in unterschiedlichen Systemen eine eindeutige ID (Kundennummer, GP-Nummer etc.) auf.
Beim Austausch von Datenobjekten zwischen verschiedenen Systemen ist es daher hilfreich,
sich die eindeutigen IDs der anzubindenden Systeme zu merken.

.. raw:: html

    <object data="../_static/images/bo4e/com/ExterneReferenz.svg" type="image/svg+xml"></object>

.. HINT::
    `ExterneReferenz JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/ExterneReferenz.json>`_ */

class ExterneReferenz {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?string $exRefName = null;
	public ?string $exRefWert = null;

}
