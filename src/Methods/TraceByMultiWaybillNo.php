<?php

namespace Naqel\Methods;

class TraceByMultiWaybillNo extends Method
{
    public function getWaybillNo(): array
    {
        return $this->params['WaybillNo'];
    }

    public function setWaybillNo(int ...$waybills): self
    {
        $this->params['WaybillNo'] = $waybills;

        return $this;
    }
}
