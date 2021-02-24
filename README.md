# HarvardLibrary
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

## What I would have done had I more time

* Expand upon the API as there is only two endpoints, and command function.
* Finish setting up Docker, as ran into many issues on my local system. If I had more time I would have created a VM using vagrant and hosted docker on that instead to reudce issues I was having with my local system.
* Implement a Hierarchical model–view–controller, if threating it like an expandable project it'd make each component encapsulated in a single module, only this module is affected in case of a change. This reduces maintenance effort and ripple effects. Testing would also be reduced in part as a variation could be introduced without chanigng the exisiting or tested code.
* Improved validation: due to time contraints I had to take some shortcuts on validation. e.g. for 1 I would have liken to include an error on the PullBookData command, but ran out of time.
* Improved testing: much of the testing isn't air tight, and had I more time I would have liken to use Mockery to create datasets for each required scenario such as the testInsertBookDataSuccess
