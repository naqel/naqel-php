<?php

namespace Naqel\Methods;

class IsWaybillDelivered extends Method
{
    public function getWaybillNo(): int
    {
        return $this->params['WaybillNo'];
    }

    public function setWaybillNo(int $waybillNo): self
    {
        $this->params['WaybillNo'] = $waybillNo;

        return $this;
    }

    public function isDelivered(): bool
    {
        return $this->getResponse()->IsWaybillDeliveredResult;
    }
}
