<?php

namespace Naqel\Methods;

use Closure;
use Naqel\Constants\StickerSize;
use Naqel\Models\ClientInfo;
use Naqel\Models\ManifestShipment;

class CreateWaybill extends Method
{
    protected ManifestShipment $manifestShipment;

    public function getManifestShipment(): ManifestShipment
    {
        return $this->manifestShipment;
    }

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

    public function getWaybillNumber(): int
    {
        return $this->getResponse()->CreateWaybillResult->WaybillNo;
    }

    public function getWaybillSticker(string $stickerSize = StickerSize::A4): string
    {
        return (new GetWaybillSticker())
            ->setWaybillNo($this->getWaybillNumber())
            ->setStickerSize($stickerSize)
            ->getPDF();
    }
}
