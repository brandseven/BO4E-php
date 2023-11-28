<?php
include 'JsonToPHPCodeGenerator.php';

$srcPath = __DIR__.'/../src';
$schemasPath = __DIR__.'/../vendor/bo4e/schemas/src/bo4e_schemas';

$generator = new JsonToPHPCodeGenerator($srcPath, $schemasPath);
$generator->generate();