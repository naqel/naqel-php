<?php

namespace Naqel\Methods;

use Error;
use Naqel\Models\ClientInfo;
use Naqel\Request;
use ReflectionClass;

class Method
{
    protected array $params;
    protected object $response;

    public function __debugInfo(): array
    {
        return (array) $this->getResponse();
    }

    public function send(): self
    {
        $method = new ReflectionClass(static::class);

        $request = new Request();

        $this->params['clientInfo'] = new ClientInfo();
        $this->params['ClientInfo'] = new ClientInfo();
        $this->params['_ClientInfo'] = new ClientInfo();

        $response = call_user_func([$request, $method->getShortName()], $this->params);

        return $this->setResponse($response);
    }

    public function getResponse($delay = 0): object
    {
        try {
            return $this->response;
        } catch (Error $e) {
            sleep($delay);

            return $this->send()->getResponse(3);
        }
    }

    public function setResponse(object $response): self
    {
        $this->response = $response;

        return $this;
    }
}
