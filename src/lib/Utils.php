<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 21.12.17
 * Time: 00:23
 */

namespace laurinium\indexus;


class Utils
{

    static public function getHTML($url){
        return file_get_contents($url);
    }

    public static function getDomDoc($html)
    {
        libxml_use_internal_errors(true);
        $doc = new \DOMDocument();
        $doc->loadHTML($html);
        $doc->normalizeDocument();
        return $doc;
    }

    public static function log($msg){
        echo date("y-m-d H:i:s")." - ".$msg."\n";
    }
}