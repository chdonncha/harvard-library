<?php

namespace App\Http\Controllers;

use App\Models\HarvardBookModel;
use Illuminate\Routing\Controller as BaseController;
use App\Models\BookModel;
use \Exception;

class BookController extends BaseController
{

    public static function getHarvardBooks()
    {
        $harvardBooks = HarvardBookModel::getHarvardBooks();
        BookModel::addBooks(json_decode($harvardBooks));
    }

    /**
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function getBooks()
    {
        try {
            $Books = BookModel::orderBy('systemId')->get();
            return response()->json($Books)->setStatusCode(200);
        } catch (Exception $e) {
            return response()->json($Books)->setStatusCode(500);
        }
    }

    /**
     * @param $argument
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function getBook($argument)
    {
        try {
            $Books = BookModel::orderBy('systemId')
                ->where('systemId', '=', $argument)
                ->get();
            return response()->json($Books)->setStatusCode(200);
        } catch (Exception $e) {
            return response()->json($Books)->setStatusCode(500);
        }
    }
}
