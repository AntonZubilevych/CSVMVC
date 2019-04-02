<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.04.19
 * Time: 21:43
 */

require_once __DIR__.'/vendor/autoload.php';

$controller = new \App\Controllers\MainController();
$controller->index('bin/users-1.csv');