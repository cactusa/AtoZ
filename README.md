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
