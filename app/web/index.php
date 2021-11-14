<?php

$path = dirname(__DIR__);
require $path . '/vendor/autoload.php';

$dotEnv = Dotenv\Dotenv::createMutable($path);
$dotEnv->load();

defined('YII_DEBUG') or define('YII_DEBUG', $_ENV['YII_DEBUG']);
defined('YII_ENV') or define('YII_ENV', $_ENV['YII_ENV']);

require $path . '/vendor/yiisoft/yii2/Yii.php';

$config = require $path . '/config/web.php';

try {
    (new yii\web\Application($config))->run();
} catch (yii\base\InvalidConfigException $exception) {
    echo $exception->getMessage();
}
