<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class HarvardBookModel extends Model
{
    /**
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getHarvardBooks()
    {
        $client = new Client();
        $request = $client->get('http://api.lib.harvard.edu/v2/collections?limit=100');
        $response = $request->getBody()->getContents();

        return $response;
    }
}
