<?php

namespace Naqel;

use Naqel\Constants\API;
use SoapClient;

class Request extends SoapClient
{
    public function __construct(array $options = [])
    {
        if (Naqel::config('use_sandbox')) {
            return parent::__construct(API::DEMO_URL, $options);
        }

        return parent::__construct(API::PROD_URL, $options);
    }
}
