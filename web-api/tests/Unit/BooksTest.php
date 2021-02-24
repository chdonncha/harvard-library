<?php

namespace Tests\Unit;
use App\Models\HarvardBookModel;
use App\Models\BookModel;
use Mockery\Mock;
use Tests\TestCase;

class BooksTest extends TestCase
{

    public function testGetBooksSuccess()
    {
        $booksResponse   = $this->get('/api/library/books');
        $data            = json_decode($booksResponse->getContent());
        $this->assertSame(200, $booksResponse->getStatusCode());
        $this->assertNotEmpty($data);
    }

    public function testGetBookSuccess()
    {
        $booksResponse   = $this->get('/api/library/book/1');
        $data            = json_decode($booksResponse->getContent());
        $this->assertSame(200, $booksResponse->getStatusCode());
        $this->assertNotEmpty($data);
    }

    public function testGetBookFailure()
    {
        $booksResponse   = $this->get('/api/library/book/a');
        $this->assertSame(404, $booksResponse->getStatusCode());
    }

    public function testHarvardBookSuccess()
    {
        $harvardBooksResponse   = HarvardBookModel::getHarvardBooks();
        $data                   = json_decode($harvardBooksResponse);
        $this->assertNotEmpty($data);
    }

    /**
     * Mock Book Insert using Mockery
     */
    public function testInsertBookDataSuccess()
    {
//        $bookDataSet[] =
//        [
//            "created"           => "2018-11-15 20:46:41",
//            "modified"          => "2020-05-13 14:57:24",
//            "baseUrl"           => "https://testBaseUrl",
//            "collectionUrn"     => "http://testCollection",
//            "contactDepartment" => "Historical and Special Collections, Harvard Law Library",
//            "contactName"       => "Testing Beck",
//            "dcp"               => 1,
//            "systemId"          => 1,
//            "public"            => 1,
//            "setDescription"    => "This collection of nearly 600 broadsides highlights crime and capital punishment, primarily in England, as seen through the popular press in the 18th and 19th century.",
//            "setName"           => "English Crime and Execution Broadsides",
//            "setSpec"           => "crimes",
//            "thumbnailUrn"      => "http://nrs.harvard.edu/urn-3:HLS.Libr:912568?n=178",
//        ];
//
//        $bookDataSet = json_encode($bookDataSet);
//        $test = BookModel::addBooks(json_decode($bookDataSet));
    }

}
