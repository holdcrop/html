<?php

namespace Resources\Daft;

use Config\ConfigManager;
use Resources\Tokenizer\Tokenizer;

class APIRequest {

    /**
     * @var null|\SoapClient
     */
    protected $_soap_client = null;

    /**
     * @var string
     */
    protected $_search_method = 'search_sale';

    /**
     * @var array
     */
    protected $_parameters;

    /**
     * @var \stdClass|null
     */
    protected $_response = null;

    /**
     * Constructor
     *
     * @param Tokenizer $tokenizer
     */
    public function __construct(Tokenizer $tokenizer, ConfigManager $config) {

        // Instantiate the new SoapClient
        $this->_soap_client = new \SoapClient(
            $config->offsetGet('daft')->offsetGet('soap_client')->offsetGet('url'),
            array(
                'features'  => $config->offsetGet('daft')->offsetGet('soap_client')->offsetGet('features')
            )
        );

        // Set the parameters
        $this->_parameters['api_key'] = $config->offsetGet('daft')->offsetGet('api_key');

        // Add the parameters from the Tokenizer
        $this->_buildParameters($tokenizer);
    }

    /**
     * Run the search
     */
    public function run() {

        $this->_response = $this->_soap_client->{$this->_search_method}($this->_parameters);
    }

    private function _buildParameters(Tokenizer $tokenizer) {

        $this->_parameters['query'] = array();

        // Determine the search type
        if($tokenizer->getSearchType()) {

            switch($tokenizer->getSearchType()) {
                case 'let':
                case 'rent':
                    $this->_search_method = 'search_rental';
                    break;
                case 'sale':
                    $this->_search_method = 'search_sale';
                    break;
                default:
                    $this->_search_method = 'search_sale';
                    break;
            }
        }

        // Set the bed parameters
        if($tokenizer->getNumberOfBeds()) {

            if(is_array($tokenizer->getNumberOfBeds())) {

                foreach($tokenizer->getNumberOfBeds() as $type => $beds) {
                    // Check for min and max beds
                    if($type == 'min') {

                        $this->_parameters['query']['min_bedrooms'] = $beds;
                    }
                    elseif($type == 'max') {

                        $this->_parameters['query']['max_bedrooms'] = $beds;
                    }
                }
            }
            else {
                // Set number of beds
                $this->_parameters['query']['bedrooms'] = $tokenizer->getNumberOfBeds();
            }
        }

        // Set the min price
        if($tokenizer->getMinPrice()) {

            $this->_parameters['query']['min_price'] = $tokenizer->getMinPrice();
        }

        // Set the max price
        if($tokenizer->getMaxPrice()) {

            $this->_parameters['query']['max_price'] = $tokenizer->getMaxPrice();
        }
    }

    /**
     * @return null|\stdClass
     */
    public function getResponse() {

        return $this->_response;
    }
}