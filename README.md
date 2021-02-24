# HarvardLibraryTest
A Project which can retrieve information from wiki.harvard.edu
and store it in a local database
and display it on a front-end

Book data can be pulled from Harvard and inserted into the local DB by using the custom command:
``` php artisan library:pull ```

Books can be accessed then though two get requests on:

Get All Books
``` api/library/books ```

Get a single book on SystemId number
``` api/library/book/{id} ```

DB Schema:

| created           | Datetime     |
| modified          | Datetime     |
| baseUrl           | Varchar(512) |
| collectionUrn     | Varchar(512) |
| contactDepartment | Varchar(512) |
| contactName       | Varchar(50)  |
| dcp               | Boolean      |
| systemId          | Integer      |
| public            | Boolean      |
| setDescription    | Varchar(512) |
| setName           | Varchar(512) |
| setSpec           | Varchar(50)  |
| thumbnailUrn      | Varchar(512) |
| updated_at        | Datetime     |
| created_at        | Datetime     |
