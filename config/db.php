<?php

return [
    'class' => 'yii\db\Connection',
    'charset' => 'utf8',
    
    //TODO: for docker
    // 'dsn' => 'mysql:host=172.24.0.1;dbname=db_profiledata',
    // 'username' => 'dbuser',
    // 'password' => 'dbpassword',

    //TODO: for local development (not docker)
    'dsn' => 'mysql:host=localhost;dbname=db_profiledata',
    'username' => 'root',
    'password' => '',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
