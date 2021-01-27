<?php

namespace Naqel;

use Naqel\Constants\StickerSize;
use Naqel\Methods\CreateWaybill;
use Naqel\Methods\GetWaybillNoByRefNo;
use Naqel\Methods\GetWaybillSticker;
use Naqel\Methods\IsWaybillDelivered;
use Naqel\Methods\IsWaybillExists;
use Naqel\Methods\MultiWayBillTracking;
use Naqel\Methods\TraceByWaybillNo;
use Naqel\Models\ManifestShipment;

class Waybill
{
    protected int $waybillNo;

    public function __construct(int $waybillNo = null)
    {
        if ($waybillNo) {
            $this->setWaybillNo($waybillNo);
        }
    }

    public static function create($value): self
    {
        if ($value instanceof ManifestShipment) {
            $createWaybill = new CreateWaybill();
            $createWaybill->attachManifest($value);

            return new self($createWaybill->getWaybillNo());
        }

        return new self($value);
    }

    public static function byRefNo($refNo): self
    {
        $createWaybill = new GetWaybillNoByRefNo();
        $createWaybill->setRefNo($refNo);

        return new self($createWaybill->getWaybillNo());
    }

    public function number(): int
    {
        return $this->getWaybillNo();
    }

    public function getWaybillNo(): int
    {
        return $this->waybillNo;
    }

    public function setWaybillNo(int $waybillNo): self
    {
        $this->waybillNo = $waybillNo;

        return $this;
    }

    public function printSticker($size = StickerSize::A4): string
    {
        return (new GetWaybillSticker())
            ->setWaybillNo($this->getWaybillNo())
            ->setStickerSize($size)
            ->getPDF();
    }

    public function traces()
    {
        return (new TraceByWaybillNo())
            ->setWaybillNo($this->getWaybillNo())
            ->traces();
    }

    public function getTrackingStatus(int ...$waybills): array
    {
        $instance = (new MultiWayBillTracking());

        if (empty($waybills)) {
            $waybills = [$this->getWaybillNo()];

            $instance->setSolo(true);
        }

        return $instance->setWaybillNo(...$waybills)->getTrackingStatus();
    }

    public function isDelivered(): bool
    {
        return (new IsWaybillDelivered())
            ->setWaybillNo($this->getWaybillNo())
            ->isDelivered();
    }

    public function isExists(): bool
    {
        return (new IsWaybillExists())
            ->setWaybillNo($this->getWaybillNo())
            ->isExists();
    }
}
