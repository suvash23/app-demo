<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MyConfig {

    public static function read($filename) {
        $config = include $filename;
        return $config;
    }

    public static function write($filename, array $config) {
        $config = var_export($config, true);
        $result = file_put_contents($filename, "<?php return $config ;");
        return $result;
    }

}
