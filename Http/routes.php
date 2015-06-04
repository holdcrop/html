<?php

use Http\Router;

Router::get('/', 'HomeController', 'index', array());

Router::post('/search', 'SearchController', 'post', array('content-type'));