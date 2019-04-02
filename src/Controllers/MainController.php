<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.04.19
 * Time: 21:39
 */

namespace App\Controllers;


use App\Services\CsvParser;

class MainController
{
    public function __construct()
    {
        $this->parser = new CsvParser();
    }

    public function index($file)
    {
       $data =  $this->parser->parse($file);
    }
}