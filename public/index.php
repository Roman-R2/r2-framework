<?php
declare(strict_types=1);

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\ServerRequestFactory;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

### Initialization

$request = ServerRequestFactory::fromGlobals();

### Action
$name = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new HtmlResponse('Hello '. $name ."!"));

### Postprocessing

$response->withHeader('X-Developer', 'Roman');

### Sending

$emitter = new SapiEmitter();
$emitter->emit($response);