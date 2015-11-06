<?php 
class MyConfig
{
    public static function read($filename)
    {
        $config = include $filename;
        return $config;
    }
    public static function write($filename, array $config)
    {
        $config = var_export($config, true);
        $result = file_put_contents($filename, "<?php return $config ;");
	return $result;
    }
}

if( isset($_POST['submit']) )
{ 
     $config['db_name'] = $_POST['db_name'];
     $config['db_username'] = $_POST['db_username'];
     $config['db_password'] = $_POST['db_password'];
     
     //MyConfig::write('config/db_settings.php', $config);

    //$config = MyConfig::read('config/db_settings.php');
    //print_r($config);die;

   $myconfig = new MyConfig;
   $status = $myconfig->write('config/db_settings.php', $config);
	if($status == false){
	echo 'Please check file permission and try again';
	} else {
echo 'Success';
}
}


?>
