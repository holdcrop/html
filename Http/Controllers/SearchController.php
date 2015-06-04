<?php

namespace Http\Controllers;

use Http\Request\Request;
use Http\Response\Response;
use Resources\Daft\APIRequest;
use Resources\Tokenizer\Tokenizer;

class SearchController extends Controller {

    /**
     * @param   Request $request
     * @param   Response $response
     * @return  Response
     */
    public function post(Request $request, Response $response) {

        // Tokenize the search term
        $tokenizer = new Tokenizer($request->getInput('search-term'));

        // Create a new API Request object
        $api_request = new APIRequest($tokenizer, $this->_config);

        $api_request->run();

        // Set the API response in our App Response object
        $response->setBodyEncoded($api_request->getResponse());

        return $response;
    }
}