<?php
include_once('library/simplehtmldom/simple_html_dom.php');
require 'db_connection.php';
//declare crawled pages directory
$dir = "crawled_pages";


//$users = User::where('votes', '>', 1)->get();
// Scan a directory, and read files
$files = array_diff(scandir($dir), array('..', '.'));
//print_r($files);
foreach ($files as $file) {

    $file_path = "crawled_pages/" . $file;
    // Create DOM from file
    $html = file_get_html($file_path);
    if ($html && is_object($html) && isset($html->nodes)) {
    // Find all links which has .org extension
    //foreach($html->find('a[href*="features.php"]') as $a)
        $scheme = 'http';
        $fetch_url = '';
        foreach ($html->find('a[href*=".org"]') as $element) {
            $parse = parse_url($element->href);
            if(isset($parse['scheme']))$scheme = $parse['scheme'];
            if(isset($parse['host']))$fetch_url = $scheme.'//'.$parse['host'];;
            
            print $fetch_url;
            print_r($parse);
//            $capsule->table('url')->insert([
//                ['url' => $fetch_url]
//            ]);
        }
        //handle memory leackage
        //clear the $html variable and unset it
        $html->clear();
        unset($html);
    }
}
?>