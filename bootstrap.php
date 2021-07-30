<?php
// bootstrap.php
// Include Composer Autoload (relative to project root).
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$namespaces = [
    'config/*.yml' => 'App\Model',
];
$driver = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver($namespaces);
$driver->setGlobalBasename('global'); // global.orm.yml

$isDevMode = true;
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config"));

$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'database',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'orm',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
