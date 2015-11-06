<?php
require 'config/myconfig.php';
if (isset($_POST['submit'])) {
    $config['db_name']      = $_POST['db_name'];
    $config['db_username']  = $_POST['db_username'];
    $config['db_password']  = $_POST['db_password'];

    //MyConfig::write('config/db_settings.php', $config);
    //$config = MyConfig::read('config/db_settings.php');
    //print_r($config);die;

    $myconfig = new MyConfig;
    $status = $myconfig->write('config/db_settings.php', $config);
    if ($status == false) {
        //$error = 'Please check file permission and try again';
        header("Location:install.php?error=file_operation");
    } else {
        require 'db_connection.php';
        try {
            $capsule->getConnection();
            header("Location:sucess.php");
        } catch (PDOException $e) {
            //$error = 'Error establishing a database connection';
            header("Location:install.php?error=db_connection");
        }
    }
}
