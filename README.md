# HarvardLibrary
A Project which can retrieve information from wiki.harvard.edu and store it in a local database. The books can then be retrieved via JSON from requests made to the local server. <br />

## Getting Started

Book data can be pulled from Harvard and inserted into the local DB by using the custom command: <br />
``` php artisan library:pull ```

Books can be accessed then though two get requests on: <br />

Get All Books <br />
``` api/library/books ```

Get a single book on SystemId number <br />
``` api/library/book/{id(int)} ```

## Database
MySQL was used for storing the books in a local database. <br />
Included also are migrations of the current schema used. <br />

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

## Running the tests
In all there's 6 unit tests. These test that each endpoint is returning a 200 status code where a successful call is made, a 404 status code when the wrong value type is passed and tests to ensure JSON data is returned from the request.

Tests can be ran using either

``` ./vendor/bin/phpunit ``` 

or

``` php artisan test ```

but php artisan test is recommend to use as it offers more verbose test reports

## Built With

* Laravel 4.0.0
* PHP 7.3.27
* MySQL 5.7.33

## Other seperately downloaded packages
* Guzzle (for a cleaner way of making the HTTP GET request to Harvard)

## Software Used

* DBeaver (as a linux alternative to Heidisql)
* Postman

## What I would have done had I more time

* Expand upon the API as there is only two endpoints, and command function.
* Finish setting up Docker, as ran into many issues on my local system. If I had more time I would have created a VM using vagrant and hosted docker on that instead to reudce issues I was having with my local system.
* Implement a Hierarchical model–view–controller, if threating it like an expandable project it'd make each component encapsulated in a single module, only this module is affected in case of a change. This reduces maintenance effort and ripple effects. Testing would also be reduced in part as a variation could be introduced without chanigng the exisiting or tested code.
* Improved validation: due to time contraints I had to take some shortcuts on validation. e.g. for 1 I would have liken to include an error on the PullBookData command, but ran out of time.
* Improved testing: much of the testing isn't air tight, and had I more time I would have liken to use Mockery to create datasets for each required scenario such as the testInsertBookDataSuccess
* A front-end where the data could be actually viewed. Due to time contraints too mainly lost due to issues with docker this feature had to be dropped, but I would have created an AngularJS front-end and made reuqests on the front-end which would be displayed in a gridformat with toggleable sorting on each column.
* There was no primary key in the DB, and two fields that aren't populated. Unfortunately this would have been a quick issue to resolve as one "created" field was redundant as there was alreayd another that was working, and the "modified" one would never be populated. The systemId should have been the primary key though is NOT NULL.
* Using a Linter or code quality analyser to ensure consistent and quality code e.g. PHPinsights, Larastan
* Updated Laravel to a higher version, used composer create ``` laravel/laravel ``` to install Laravel but only noticed until later that it was a lower version than I expected.
 
## Other Issues
* The harvard api seems to only able to retrieve 30 books max, even when a limit is set to 100 or even 1000 it’ll only retrieve 30 books.
