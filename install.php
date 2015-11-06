<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'demo_app',
    'username'  => 'root',
    'password'  => 'root123',
    'charset'   => 'utf8',
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
$results = Capsule::select('select * from url where id = ?', array(1));


Capsule::table('users')->insert([
    ['email' => 'taylor@example.com'],
    ['email' => 'dayle@example.com']
]);
print_r($results);

?>
