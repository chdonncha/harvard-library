# HarvardLibrary
A Project which can retrieve information from wiki.harvard.edu and store it in a local database. The books can then be retrieved via JSON from requests made to the local server. <br />

## Getting Started

install prerequisites
`composer install`
`npm install`

Once the localdatabase and setup and configured:
create a file called .env and base it off .env.example and fill in the required database details
generate application key for secure connection by using `php artisan key:generate` which will be populated into the .env file
with database correctly configured then run migrations to create tables - `database/migrations`

Book data can be pulled from Harvard and inserted into the local DB by using the custom command: <br />
``` php artisan library:pull ```
<br /><br />

After which the server can be hosted using ``` php artisan serve ``` to access the local endpoints.

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

* PHPstorm
* DBeaver (as a linux alternative to Heidisql)
* Postman

## Todo

* Expand upon the API as there is only two endpoints, and command function.
* Implement a Hierarchical model–view–controller, if threating it like an expandable project it'd make each component encapsulated in a single module, only this module is affected in case of a change. This reduces maintenance effort and ripple effects. Testing would also be reduced in part as a variation could be introduced without chanigng the exisiting or tested code.
* Improved validation
* Improved testing: much of the testing currently isn't air tight, use Mockery to create datasets for each required scenario such as the testInsertBookDataSuccess etc.
* A front-end where the data could be actually viewed, possibly using Angular or AngularJS front-end and make reuqests on the front-end which would be displayed in a gridformat with toggleable sorting on each column.
* There was no primary key in the DB, and two fields that aren't populated. Unfortunately this would have been a quick issue to resolve as one "created" field was redundant as there was already another that was working, and the "modified" one would never be populated. The systemId should have been the primary key though is NOT NULL.
* Using a Linter or code quality analyser to ensure consistent and quality code e.g. PHPinsights, Larastan
* Updated Laravel to a higher version
 
## Issues
* The harvard api seems to only able to retrieve 30 books max, even when a limit is set to 100 or even 1000 it’ll only retrieve 30 books.
* Possibily should have used a different public API or built out my own via express and populated with randomised data (may end up taking the issues of this and applying it into another API project to attmept to rectify these issues)
