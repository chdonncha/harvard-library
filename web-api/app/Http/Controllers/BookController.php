<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\BookModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function getHarvardBooks()
    {
        $client = new Client();
        $request = $client->get('http://api.lib.harvard.edu/v2/collections?limit=100');
        $response = $request->getBody()->getContents();

        BookModel::addBooks($response);
    }

    public function getBooks(Request $request, Response $response)
    {
        //Implement Orderby systemId
        try {
            $Books = BookModel::all();
            return response()->json($Books)->setStatusCode(200);
        } catch (Exception $e) {
            return response()->json($Books)->setStatusCode(500);
        }
    }

    public function getBook(Request $request, Response $response)
    {
        dd("got book");
//        $Books = BookModel::where('systemId', '=' $param);
    }
}
