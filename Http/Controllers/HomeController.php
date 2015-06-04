<?php

namespace Http\Controllers;

use Http\Request\Request;
use Http\Response\Response;

class HomeController extends Controller {

    /**
     * @param   Request     $request
     * @param   Response    $response
     * @return  Response
     */
    public function index(Request $request, Response $response) {

        $response->setView('search-form.php');

        return $response;
    }
}