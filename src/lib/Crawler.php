<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 20.12.17
 * Time: 23:11
 */

namespace laurinium\indexus;


class Crawler{
    /**
     * @var $depth integer depth to crawl
     */
    private $depth;
    /**
     * @var $url string URL the crawler starts with
     */
    private $url;

    /**
     * @var array $links
     */
    private $links = array();
    private $visited = array();
    private $skiplist = ["gif","png","jpg","jpeg"];

    public function __construct($url, $depth){
        $this->url = $url;
        $this->depth = $depth;

    }

    public function scan(){
        $links = $this->extractLinks($this->url);
        $this->spider($links);
        $this->links = array_unique($this->links);
    }

    private function spider($urls){
        foreach ($urls as $link){
            if(!in_array($link,$this->visited) && !$this->isSkipAble($link)){
                $this->visited[]= $link;
                $this->addLink($link);

                Utils::log("Visiting ".$this->url."/".$link);
                $this->spider($this->extractLinks($this->url."/".$link));
            }
        }
    }

    private function extractLinks($url){
        $res = [];
        $html = $this->getHTML($url);
        $doc = Utils::getDomDoc($html);
        $links = $doc->getElementsByTagName("a");
        /**
         * @var $link \DOMElement
         */
        foreach ($links as $link){
            $res[] = $link->getAttribute("href");
        }
        return $res;
    }

    private function getHTML($url) {
        return Utils::getHTML($url);
    }

    private function addLink($link){
        $this->links[] = $this->url."/".$link;
    }

    private function isSkipAble($link){
        $ext =pathinfo(parse_url($link)['path'], PATHINFO_EXTENSION);
        if(in_array(strtolower($ext),$this->skiplist)){
            Utils::log("Skipping ".$link);
            return true;
        }
        return false;

    }

    public function getUrls(){
        return $this->links;
    }

}