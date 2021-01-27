<?php

namespace Naqel;

use Naqel\Methods\GetLoadTypeList;
use Naqel\Models\ClientAddress;
use Naqel\Models\ClientContact;

class Naqel
{
    protected static array $config = [];
    protected static ClientAddress $clientAddress;
    protected static ClientContact $clientContact;

    public function __construct(array $config = [])
    {
        $this->setConfig($config);
    }

    public static function config($key, $default = null)
    {
        return self::$config[$key] ?? $default;
    }

    public function setConfig(array $config = [])
    {
        self::$config = $config;
    }

    public function getLoadTypeList(): GetLoadTypeList
    {
        return new GetLoadTypeList();
    }

    public function setClientAddress(ClientAddress $clientAddress): self
    {
        self::$clientAddress = $clientAddress;

        return $this;
    }

    public function setClientContact(ClientContact $clientContact): self
    {
        self::$clientContact = $clientContact;

        return $this;
    }

    public static function getClientAddress(): ClientAddress
    {
        return self::$clientAddress;
    }

    public static function getClientContact(): ClientContact
    {
        return self::$clientContact;
    }
}
