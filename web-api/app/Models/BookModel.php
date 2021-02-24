<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'Books';

    protected $fillable =
        [
            'created',
            'modified',
            'baseUrl',
            'collectionUrn',
            'contactDepartment',
            'contactName',
            'dcp',
            'systemId',
            'public',
            'setDescription',
            'setName',
            'setSpec',
            'thumbnailUrn',
        ];

    use HasFactory;

    public static function addBooks($request)
    {
        $dataSet = [];
        $request = json_decode($request);

        foreach($request as $book)
        {
            $dataSet[] = [
                'created'           => $book->created,
                'modified'          => $book->modified,
                'baseurl'           => $book->baseUrl,
                'collectionUrn'     => $book->collectionUrn,
                'contactDepartment' => $book->contactDepartment,
                'contactName'       => $book->contactName,
                'dcp'               => $book->dcp,
                'systemId'          => $book->systemId,
                'public'            => $book->public,
                'setDescription'    => $book->setDescription,
                'setName'           => $book->setName,
                'setSpec'           => $book->setSpec,
                'thumbnailUrn'      => $book->thumbnailUrn,
                ];
        }

        BookModel::insert($dataSet);
    }
}
