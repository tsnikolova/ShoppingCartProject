<?php
/**
 * Created by PhpStorm.
 * User: Tsvetelina
 * Date: 29.9.2015 ã.
 * Time: 18:02 ÷.
 */

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../Framework/App.php';
$app = GFramework\App::getInstance();
$app->run();
