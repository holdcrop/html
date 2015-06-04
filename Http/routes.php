<?php

use Http\Router;

Router::get('/', 'HomeController', 'index');

Router::post('/search', 'SearchController', 'post');