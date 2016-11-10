<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/1
 * Time: 17:37
 */
include 'vendor/autoload.php';
$locator = new \Symfony\Component\Config\FileLocator($configDirectories);
$yamlUserFiles = $locator->locate('users.yml', null, false);
