<?php

namespace Naqel\Methods;

use Illuminate\Support\Collection;

class MultiWayBillTracking extends Method
{
    private bool $solo = false;

    public function getWaybillNo(): int
    {
        return $this->params['WaybillNo'];
    }

    public function setWaybillNo(int ...$waybillNo): self
    {
        $this->params['WaybillNo'] = $waybillNo;

        return $this;
    }

    public function getTrackingStatus(): array
    {
        $results = Collection::wrap($this->MultiWayBillTrackingResult->WayBillTracking);

        $results = $results->map(fn ($x) => (array) $x);

        if ($this->solo) {
            return $results->first();
        }

        return $results->toArray();
    }

    public function setSolo(bool $value)
    {
        $this->solo = $value;
    }
}
