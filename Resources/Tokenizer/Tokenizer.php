<?php

namespace Resources\Tokenizer;


class Tokenizer {

    /**
     * Pattern to match /(number)( )bed(room)(s)/
     *
     * @var string
     */
    const BEDS_PATTERN = '/([0-9]+[ ]?bed)([r][o]+[m])?(s?)\b/';

    /**
     * Pattern to match /(to|for)()(sale|rent|let)/
     *
     * @var string
     */
    const SEARCH_TYPE_PATTERN = '/((to|for)( ))?(\bsale|rent|let)\b/';

    /**
     * @var string
     */
    protected $_original_string = '';

    /**
     * @var string|null
     */
    protected $_search_type = null;

    /**
     * @var string|null
     */
    protected $_area = null;

    /**
     * @var integer|null
     */
    protected $_min_price = null;

    /**
     * @var integer|null
     */
    protected $_max_price = null;

    /**
     * @var int|null
     */
    protected $_number_of_beds = null;

    /**
     * Constructor
     *
     * @param $_original_string
     */
    public function __construct($original_string) {

        $this->_original_string = $original_string;

        $this->_determineSearchType()
                ->_determineArea()
                ->_determineNumberOfBeds()
                ->_determineMinPrice()
                ->_determineMaxPrice();
    }

    /**
     * Determine the number of beds
     *
     * @return $this
     */
    private function _determineNumberOfBeds() {

        $matches = array();

        // Find any matches
        preg_match(self::BEDS_PATTERN, $this->_original_string, $matches);

        if(count($matches) > 0) {
            // Remove all but the number
            $this->_number_of_beds = preg_replace('/([^0-9]+)/', '', $matches[0]);
        }

        return $this;
    }

    /**
     * Determine the search type
     *
     * @return $this
     */
    private function _determineSearchType() {

        $matches = array();

        // Find any matches
        preg_match(self::SEARCH_TYPE_PATTERN, $this->_original_string, $matches);

        if(count($matches) > 0) {
            // Remove all but (sale|rent|let)
            $this->_search_type = preg_replace('/(to|for| )/', '', $matches[0]);
        }

        return $this;
    }

    /**
     * Determine the min price
     *
     * @return $this
     */
    private function _determineMinPrice() {

        return $this;
    }

    /**
     * Determine the max price
     *
     * @return $this
     */
    private function _determineMaxPrice() {

        return $this;
    }

    /**
     * Determine the area
     *
     * @return $this
     */
    private function _determineArea() {

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalString() {
        return $this->_original_string;
    }

    /**
     * @return null|string
     */
    public function getSearchType() {
        return $this->_search_type;
    }

    /**
     * @return null|string
     */
    public function getArea() {
        return $this->_area;
    }

    /**
     * @return int|null
     */
    public function getMinPrice() {
        return $this->_min_price;
    }

    /**
     * @return int|null
     */
    public function getMaxPrice() {
        return $this->_max_price;
    }

    /**
     * @return int|null
     */
    public function getNumberOfBeds() {
        return $this->_number_of_beds;
    }
}