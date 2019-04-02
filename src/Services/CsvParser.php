<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.04.19
 * Time: 21:13
 */

namespace App\Services;


class CsvParser
{
    public function parse( string $filename):array
    {
        $result = [];

        if (($h = fopen("{$filename}", "r")) !== FALSE)
        {
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
            {
                $result[] = $data;
            }
            fclose($h);
        }
        return $result;
    }
}