#!/bin/env/php
<?php

/**
 * Created by PhpStorm.
 * User: jens
 * Date: 20.12.17
 * Time: 23:10
 */

use laurinium\indexus\Indexer;
error_reporting(E_ERROR);
require_once("vendor/autoload.php");

$indexer = new Indexer("test","http://dahme4ever.de",10);
$indexer->init();