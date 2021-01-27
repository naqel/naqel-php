<?php

namespace Naqel\Methods;

class IsWaybillExists extends Method
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

    public function isExists(): bool
    {
        return $this->getResponse()->IsWaybillExistsResult;
    }
}
