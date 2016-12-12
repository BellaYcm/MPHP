<?php

/**
 * @link http://symfony.com/doc/current/components/http_foundation.html
 *
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/2
 * Time: 18:39
 */
include "vendor/autoload.php";
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$request=Request::create("/index.php?bar=123");
//var_dump($request);
$bar = $request->query->get('bar', 'baz');
var_dump($bar);
$pathInfo = $request->getPathInfo();
$httpHost = $request->server->get('HTTP_HOST');
$method=$request->getMethod();

$response=new \Symfony\Component\HttpFoundation\Response();
$response->setContent("hello world");
$response->setStatusCode(200);
$response->headers->set("Content-Type",'text/html');

