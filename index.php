<?php
$loader = require './vendor/autoload.php';
$initializer = new Devine\AutoInitializer\AutoInitializer;

$test = $initializer->build("Devine\Examples\TestClass");
var_dump($test);