<?php
/*
|--------------------------------------------------------------------------
| FUEL NAVIGATION: An array of navigation items for the left menu
|--------------------------------------------------------------------------
*/
$config['nav']['tools']['tools/tester'] = 'Tester';



/*
|--------------------------------------------------------------------------
| TOOL SETTING: Tester
|--------------------------------------------------------------------------
*/

// dsn for database connection. If not supplied, it will assume a 'test' group name is created in the database.php config
$config['tester']['dsn'] = '';

// the name of the test database
$config['tester']['db_name'] = 'fuel_test';

// the cookie jar file path used for CURL sessions
// more info http://www.php.net/manual/en/function.curl-setopt.php
$config['tester']['session_cookiejar_file'] = 'cookiefile.txt';


