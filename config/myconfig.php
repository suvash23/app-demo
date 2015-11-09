<?php

/*
 * MyConfig class created to read and write config file
 */

class MyConfig {
    /**
     * Read a file
     * @param type $filename
     * @return string
     */
    public static function read($filename) {
        $config = include $filename;
        return $config;
    }
    /**
     * 
     * @param type $filename
     * @param array $config
     * @return the number of bytes that were written to the file, or FALSE on failure
     */
    public static function write($filename, array $config) {
        $config = var_export($config, true);
        $result = file_put_contents($filename, "<?php return $config ;");
        return $result;
    }

}
