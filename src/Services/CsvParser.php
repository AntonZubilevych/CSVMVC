<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.04.19
 * Time: 21:13
 */

namespace App\Services;


class UserParser
{
    public function parse()
    {
        $data = [];
        foreach ($csvFile as $line) {
            $data[] = str_getcsv($line);
        }
    }
}