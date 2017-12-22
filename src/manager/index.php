<?php
/**
 * Project         : indexus-machina
 * Filename        : ${Name}
 * Date            : 22.12.17
 * Author          : laur
 *
 * Beschreibung: ${Desc}
 */

use Slim\Http\Request;
use Slim\Http\Response;
ini_set("display_errors",1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();
