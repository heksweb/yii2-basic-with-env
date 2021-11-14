<?php

use yii\helpers\ArrayHelper;

$config = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . $_ENV['DB_HOST'] .';dbname=' . $_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
    'charset' => $_ENV['DB_CHARSET'],
    'attributes' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET SESSION sql_mode = (SELECT REPLACE(@@sql_mode,"ONLY_FULL_GROUP_BY",""));'
    ]
];

if (YII_ENV_PROD) {
    ArrayHelper::merge($config, [
        // Schema cache options (for production environment)
        'enableSchemaCache' => true,
        'schemaCacheDuration' => 3600,
        'schemaCache' => 'cache',
    ]);
}

return $config;
