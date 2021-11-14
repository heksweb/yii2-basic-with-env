<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'mysql:host=' . $_ENV['TEST_DB_HOST'] .';dbname=' . $_ENV['TEST_DB_NAME'];

return $db;
