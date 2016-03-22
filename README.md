Coding Exercise
========================

Create a working example of an A to Z programme listing, by utilizing an API endpoint to get the required information (titles and images)

How to run
--------------

* Clone this repository
* Your PHP timezone setting might be not set in which case you need to:
 * Run sudo cp /etc/php.ini.default /etc/php.ini
 * Run sudo vi /etc/php.ini
 * Uncomment and change the date.timezone value to equal "Europe/London", then save and exit
* Run php app/console server:run
* Open http://127.0.0.1:8000/a-z/a in a browser


Or use the cloud hosted version (only for seing the page):
--------------
* Open at http://symfony-cactusa.c9users.io/web/app_dev.php/a-z/a

Tets:
--------------
* To execute the tests you will need [composer](https://getcomposer.org/) installed.
* Go to the project root folrder and run the following command to run both unit and functional tests: vendor/symfony/symfony/phpunit -c app 
* Note: The tests are based of the live feed and are likely to fail if the state of the feed changes. Ideally a mock webservice would be used instead in order to provide reliable test results.
