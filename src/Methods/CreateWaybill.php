<?php

namespace Naqel\Methods;

use Closure;
use Naqel\Models\ClientInfo;
use Naqel\Models\ManifestShipment;

class CreateWaybill extends Method
{
    protected ManifestShipment $manifestShipment;

    public function attachManifest($value): self
    {
        if ($value instanceof Closure) {
            $this->manifestShipment = new ManifestShipment();

            $value($this->manifestShipment);
        } else {
            $this->manifestShipment = $value;
        }

        $this->manifestShipment->setClientInfo(new ClientInfo());

        $this->params['_ManifestShipmentDetails'] = $this->manifestShipment;

        return $this;
    }

    public function getWaybillNo(): int
    {
        return $this->CreateWaybillResult->WaybillNo;
    }
}
