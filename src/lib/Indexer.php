<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 20.12.17
 * Time: 23:05
 */

namespace laurinium\indexus;


class Indexer
{
    /**
     * @var $index string the elasticsearch index
     */
    private $index;
    /**
     * @var $baseURL string the base url of the site to index. Only sites with this URL will be indexed
     */
    private $baseURL;
    /**
     * @var $depth integer depth to crawl
     */
    private $depth;
    /**
     * @var $crawler Crawler
     */
    private $crawler;

    public function __construct($index,$baseURL,$depth = 10){
        $this->index = $index;
        $this->baseURL = $baseURL;
        $this->depth = $depth;
        $this->crawler = new Crawler($this->baseURL,$this->depth);
    }

    public function init(){
        $this->crawler->scan();
        foreach ($this->crawler->getUrls() as $url) {
            $this->index($url);
        }
    }

    private function index($url){
        $html = Utils::getHTML($url);
        $doc = Utils::getDomDoc($html);
        $doc = $this->cleanUpHTML($doc);
        $text = strip_tags($doc->getElementsByTagName("body")->item(0));
        file_put_contents("index_".md5($url),$text);
    }

    private function cleanUpHTML(\DOMDocument $dom){
        $tags = $dom->getElementsByTagName("script");
        /**
         * @var  $tag \DOMElement
         */
        foreach ($tags as $tag){
            $tag->parentNode->removeChild($tag);
        }

        return $dom;
    }


}