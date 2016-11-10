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
//var_dump($request);
$bar = $request->query->get('bar', 'baz');
var_dump($bar);