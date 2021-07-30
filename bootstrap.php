<?php
// bootstrap.php
// Include Composer Autoload (relative to project root).
require_once "vendor/autoload.php";

$namespaces = [
    'config/*.yaml' => 'App\Model',
];
$driver = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver($namespaces);
$driver->setGlobalBasename('global'); // global.orm.yml
