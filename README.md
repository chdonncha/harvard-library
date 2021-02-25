# HarvardLibrary
A Project which can retrieve information from wiki.harvard.edu and store it in a local database <br />

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
* A front-end where the data could be actually viewed. Due to time contraints too mainly lost due to issues with docker this feature had to be dropped, but I would have created an AngularJS front-end and made reuqests on the front-end which would be displayed in a gridformat with toggleable sorting on each column.
* There was no primary key in the DB, and two fields that aren't populated. Unfortunately this would have been a quick issue to resolve as one "created" field was redundant as there was alreayd another that was working, and the "modified" one would never be populated. The systemId should have been the primary key though is NOT NULL.

## Other Issues
* The harvard api seems to only able to retrieve 30 books max, even when a limit is set to 100 or even 1000 it’ll only retrieve 30 books.
