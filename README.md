# HarvardLibraryTest 
A Project which can retrieve information from wiki.harvard.edu <br />
and store it in a local database <br />
and display it on a front-end <br />

Book data can be pulled from Harvard and inserted into the local DB by using the custom command: <br />
``` php artisan library:pull ```

Books can be accessed then though two get requests on: <br />

Get All Books <br />
``` api/library/books ```

Get a single book on SystemId number <br />
``` api/library/book/{id} ```

DB Schema:

|            |      |
|-------------------|--------------|
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
