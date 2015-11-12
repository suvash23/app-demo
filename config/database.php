<?php
return array(
    //You can define multiple connections
    //each with a different name
    'default' => array(
        'driver'     => 'pdo',

        //MySQL
        'connection' => 'mysql:host=localhost;dbname=demo_app',
        'user'       => 'root',
        'password'   => 'root123'
    )
);
?>
