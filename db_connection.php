<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'vendor/autoload.php';

$myconfig = new MyConfig;

$db_config = MyConfig::read('config/db_settings.php');

//$whoops = new \Whoops\Run;
//$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => $db_config['db_name'],
    'username' => $db_config['db_username'],
    'password' => $db_config['db_password'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

// SELECT * FROM `posts` WHERE `status`='published'
//$results = Capsule::table('url')->get();
//$results = Capsule::select('select * from url where id = ?', array(1));
//
//
//Capsule::table('users')->insert([
//    ['email' => 'taylor@example.com'],
//    ['email' => 'dayle@example.com']
//]);
//print_r($results);
/**
 * Creates a new database schema.

 * @param  string $schemaName The new schema name.
 * @return bool
 */
//$conn = $capsule->getConnection();
//if($conn){
//    echo 'Success';
//}else {
//    echo "Please check the credentials";
//}
//echo $conn;
