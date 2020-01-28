<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
date_default_timezone_set('Europe/Paris');
require_once "vendor/autoload.php";
$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config/yaml"), $isDevMode);
$conn = array(
'driver' => 'pdo_mysql',
'host'=> 'cd4a2220-da2c-4230-8968-4d8c43c687a5.projet-web-b-1610.mysql.dbs.scalingo.com:',
'user' => 'projet_web_b_1610',
'password' => 'zEy7VGdSbhw-nGnHriTn',
'dbname' => 'projet_web_b_1610',
'port' => '33571'
);
$entityManager = EntityManager::create($conn, $config);
