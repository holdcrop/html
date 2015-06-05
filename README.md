# html

## Installation

* Clone the repository and run a _composer update_
* Add appropriate write permissions to the __storage/rate_limits__ directory in order for the _RateLimiter_ middleware to run.
Otherwise, remove the _RateLimiter_ instance from the list of middleware to be run in _App.php_. An _Internal Server Error (500)_ will be thrown otherwise when you try to access the application.
* The _document root_ for your HTTP Server is __public__. A _.htaccess_ is included already for use with _Apache HTTP Server_.

