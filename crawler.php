<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// It may take a whils to crawl a site ...
set_time_limit(0);

// Inculde the phpcrawl-mainclass
include("library/PHPCrawl/libs/PHPCrawler.class.php");
//require db connection
require 'db_connection.php';
// Extend the class and override the handleDocumentInfo
class MyCrawler extends PHPCrawler { 
 function handleDocumentInfo(PHPCrawlerDocumentInfo $p){ 
  $pageurl= $p->url;
  $status = $p->http_status_code;
  $source = $p->source;
  if($status==200 && $source!=""){
    if (PHP_SAPI == "cli") $lb = "\n";
    else $lb = "<br />";
      $parse = parse_url($pageurl);
   // Got Page Successfully
      file_put_contents("crawled_pages/".$parse['host'].".html", $source);
   echo $pageurl.$lb;
   flush();
  }
 }
}

/**
 *  crawl method
 *  Create the crawler class object and set the options for crawling
 * @param type $u URL
 */
function crawl($u){
 $C = new MyCrawler();
 $C->setURL($u);
 $C->addContentTypeReceiveRule("#text/html#");/* Only receive HTML pages */
 $C->addURLFilterRule("#(jpg|gif|png|pdf|jpeg|svg|css|js)$# i"); /* We don't want to crawl non HTML pages */
 $C->setTrafficLimit(2000 * 1024);
 $C->obeyRobotsTxt(true); /* Should We follow robots.txt */
 $C->go();
}
//get URL from url table
$links = $capsule->table('url')->get();
foreach ($links as $link) {
    $crawlURL = $link->url;
    if (isset($crawlURL)) {
        //Start crawling
        crawl($crawlURL);
    }
}