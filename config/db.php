<?php
// Подключаемся к нашей БД
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=library',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
