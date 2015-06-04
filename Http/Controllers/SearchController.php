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
        $tokenizer = new Tokenizer($request->getInput('search_term'));

        // Create a new API Request object
        $api_request = new APIRequest($tokenizer, $this->_config);

        $api_request->run();

        $api_response = $api_request->getResponse();

        // Set the API response in our App Response object
        $response->setView('search-form.php', array('include' => 'search-results.php', 'params' => $api_response));

        return $response;
    }
}