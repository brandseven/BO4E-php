<?php

class JsonToPHPCodeGenerator {

	public const BO4E_NAMESPACE = 'BO4E';
	public const BO4E_NAMESPACE_BO = 'Bo';
	public const BO4E_NAMESPACE_COM = 'Com';
	public const BO4E_NAMESPACE_ENUM = 'Enum';

	private string $srcPath;
	private string $schemasPath;

	public function __construct(string $srcPath, string $schemasPath) {
		$this->srcPath = $srcPath;
		$this->schemasPath = $schemasPath;
	}

	public function generate(): void {
		$targetPath = "{$this->srcPath}/".self::BO4E_NAMESPACE;

		// BO
		$this->generateClasses(
			self::BO4E_NAMESPACE.'\\'.self::BO4E_NAMESPACE_BO,
			"{$this->schemasPath}/".strtolower(self::BO4E_NAMESPACE_BO),
			"{$targetPath}/".self::BO4E_NAMESPACE_BO
		);

		// COM
		$this->generateClasses(
			self::BO4E_NAMESPACE.'\\'.self::BO4E_NAMESPACE_COM,
			"{$this->schemasPath}/".strtolower(self::BO4E_NAMESPACE_COM),
			"{$targetPath}/".self::BO4E_NAMESPACE_COM
		);

		// ENUM
		$this->generateEnums(
			self::BO4E_NAMESPACE.'\\'.self::BO4E_NAMESPACE_ENUM,
			"{$this->schemasPath}/".strtolower(self::BO4E_NAMESPACE_ENUM),
			"{$targetPath}/".self::BO4E_NAMESPACE_ENUM
		);
	}

	private function generateClasses(string $nameSpace, string $srcPath, string $targetPath) {
		if ( ! is_dir($targetPath)) {
			mkdir($targetPath);
		}
		$this->cleanUpFolderForGenerator("{$targetPath}/Base");

		$schemas = glob("{$srcPath}/*.json");
		foreach ($schemas as $schema) {
			$objectName = basename($schema, '.json');
			$objectDefinition = json_decode(file_get_contents($schema), true);

			$phpDefinition = [];
			$phpDefinition[] = "<?php namespace {$nameSpace}\\Base;";
			$phpDefinition[] = '';
			$phpDefinition[] = "/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */";
			$phpDefinition[] = "/** FOR CUSTOM CHANGES USE @see \\{$nameSpace}\\{$objectName} */";
			$phpDefinition[] = '';
			if (isset($objectDefinition['description'])) {
				$phpDefinition[] = "/**";
				$phpDefinition[] = "{$objectDefinition['description']}";
				$phpDefinition[] = "*/";
				$phpDefinition[] = '';
			}
			$phpDefinition[] = "class {$objectName} {";
			$phpDefinition[] = '';

			foreach ($objectDefinition['properties'] as $key => $value) {
				$default = 'null';
				$typeDefinition = current($value['anyOf']);
				$determinedType = $this->determineType($typeDefinition);

				if (in_array($key, ['_typ', '_version'])) {
					if ($key === '_typ') {
						$default = "{$determinedType['type']}::{$value['default']}";
					} elseif ($key === '_version') {
						$default = "'{$value['default']}'";
					}
				}

				if (isset($determinedType['description'])) {
					$phpDefinition[] = "\t/** @var {$determinedType['description']} */";
				}

				$phpDefinition[] = "\tpublic ?{$determinedType['type']} \${$key} = {$default};";
			}

			$phpDefinition[] = '';
			$phpDefinition[] = "}";
			$phpDefinition[] = '';

			$targetSrcBaseFile = "$targetPath/Base/{$objectName}.php";
			file_put_contents($targetSrcBaseFile, implode("\n", $phpDefinition));


			$targetSrcFile = "$targetPath/{$objectName}.php";
			if ( ! file_exists($targetSrcFile)) {
				$phpDefinition = [];
				$phpDefinition[] = "<?php namespace {$nameSpace};";
				$phpDefinition[] = '';
				if (isset($objectDefinition['description'])) {
					$phpDefinition[] = "/**";
					$phpDefinition[] = "{$objectDefinition['description']}";
					$phpDefinition[] = "*/";
					$phpDefinition[] = '';
				}
				$phpDefinition[] = "class {$objectName} extends Base\\{$objectName} {";
				$phpDefinition[] = '';

				foreach ($objectDefinition['properties'] as $key => $value) {
//				$default = 'null';
//				$typeDefinition = current($value['anyOf']);
//				$determinedType = $this->determineType($typeDefinition);
//
//				if (in_array($key, ['_typ', '_version'])) {
//					if ($key === '_typ') {
//						$default = "{$determinedType['type']}::{$value['default']}";
//					} elseif ($key === '_version') {
//						$default = "'{$value['default']}'";
//					}
//				}
//
//				if (isset($determinedType['description'])) {
//					$phpDefinition[] = "\t/** @var {$determinedType['description']} */";
//				}
//
//				$phpDefinition[] = "\tpublic ?{$determinedType['type']} \${$key} = {$default};";
				}

				$phpDefinition[] = '';
				$phpDefinition[] = "}";
				$phpDefinition[] = '';

				file_put_contents($targetSrcFile, implode("\n", $phpDefinition));
			}

		}
	}

	private function generateEnums(string $nameSpace, string $srcPath, string $targetPath) {
		$this->cleanUpFolderForGenerator($targetPath);

		$schemas = glob("{$srcPath}/*.json");
		foreach ($schemas as $schema) {
			$objectName = basename($schema, '.json');
			$objectDefinition = json_decode(file_get_contents($schema), true);

			$phpDefinition = [];
			$phpDefinition[] = "<?php namespace {$nameSpace};";
			$phpDefinition[] = '';
			$phpDefinition[] = "/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */";
			$phpDefinition[] = '';
			if (isset($objectDefinition['description'])) {
				$phpDefinition[] = "/** {$objectDefinition['description']} */";
				$phpDefinition[] = '';
			}

			// check enum special case
			$hasToBeStringEnum = false;
			foreach ($objectDefinition['enum'] as $enum) {
				if (preg_match('/[^a-zA-Z_\d]/', $enum)) {
					$hasToBeStringEnum = true;
					break;
				}
			}

			if ($hasToBeStringEnum) {
				$phpDefinition[] = "enum {$objectName}: string {";
			} else {
				$phpDefinition[] = "enum {$objectName} {";
			}
			$phpDefinition[] = '';

			foreach ($objectDefinition['enum'] as $idx => $enum) {
				if ($hasToBeStringEnum) {

					$phpDefinition[] = "\tcase {$objectName}_{$idx} = '{$enum}';";
				} else {
					$phpDefinition[] = "\tcase {$enum};";
				}
			}

			$phpDefinition[] = '';
			$phpDefinition[] = "}";
			$phpDefinition[] = '';

			$targetSrcFile = "$targetPath/{$objectName}.php";
			file_put_contents($targetSrcFile, implode("\n", $phpDefinition));
		}
	}

	private function cleanUpFolderForGenerator($folder): void {
		$this->removeDir($folder);
		mkdir($folder);
	}

	private function determineType($typeDefinition): array {
		if (isset($typeDefinition['$ref'])) {
			$prefix = function($ref): string {
				if (str_contains($ref, 'bo4e_schemas/com')) {
					return self::BO4E_NAMESPACE_COM.'\\';
				}
				if (str_contains($ref, 'bo4e_schemas/enum')) {
					return self::BO4E_NAMESPACE_ENUM.'\\';
				}

				return '';
			};

			return [
				'type' => '\\'.self::BO4E_NAMESPACE.'\\'.$prefix($typeDefinition['$ref']).basename($typeDefinition['$ref'], '.json'),
			];
		}

		if ($typeDefinition['type'] === 'array') {
			$itemType = $this->determineType($typeDefinition['items']);
			return [
				'type' => 'array',
				'description' => "{$itemType['type']}[]",
			];
		}

		if ($typeDefinition['type'] === 'string' && ($typeDefinition['format'] ?? '') === 'date-time') {
			return [
				'type' => '\Datetime',
			];
		}

		return [
			'type' => $typeDefinition['type'],
		];
	}

	/** https://stackoverflow.com/a/53313238 */
	private function removeDir(string $dir): void {
		foreach (glob($dir) as $file) {
			if (is_dir($file)) {
				$this->removeDir("{$file}/*");
				rmdir($file);
			} else {
				unlink($file);
			}
		}
	}

}
