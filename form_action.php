<?php
//require myconfig file
require 'config/myconfig.php';
if (isset($_POST['submit'])) {
    //Get form post data
    $config['db_name']      = $_POST['db_name'];
    $config['db_username']  = $_POST['db_username'];
    $config['db_password']  = $_POST['db_password'];
    
    //Create MyConfig instance
    $myconfig = new MyConfig;
    //Write db settings file
    $status = $myconfig->write('config/db_settings.php', $config);
    if ($status == false) {
        //Throw an error while file writing operation fail
        header("Location:install.php?error=file_operation");
    } else {
        require 'db_connection.php';
        try { 
            //get db connection
            $db = $capsule->getConnection();
            //create url table
            $capsule->schema()->create('url', function($table)
            {
                $table->increments('id');
                $table->string('url')->unique();
                $table->timestamp('created_at')
                        ->default(DB::raw('CURRENT_TIMESTAMP'));
            });
            //add some seed url into url table
            $capsule->table('url')->insert([
                ['url' => 'http://www.opensecurityarchitecture.org'],
                ['url' => 'https://www.ictstandard.org/']
            ]);
            header("Location:success.php");
        } catch (PDOException $e) {
            //Throw an error while establishing a database connection
            header("Location:install.php?error=db_connection");
        }
    }
}
