<?php

namespace Http\Middleware;

use Config\ConfigManager;
use Http\Middleware\Contract\MiddlewareContract;

abstract class Middleware implements MiddlewareContract {

    /**
     * @var ConfigManager
     */
    protected $_config = null;

    public function __construct(ConfigManager $config) {

        $this->_config = $config;
    }
}