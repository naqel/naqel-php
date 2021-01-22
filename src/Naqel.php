<?php

namespace Naqel;

use Naqel\Methods\CreateWaybill;
use Naqel\Methods\GetWaybillSticker;

class Naqel
{
    protected static array $config = [];

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

    public function createWaybill(): CreateWaybill
    {
        return new CreateWaybill();
    }

    public function getWaybillSticker(): GetWaybillSticker
    {
        return new GetWaybillSticker();
    }
}
