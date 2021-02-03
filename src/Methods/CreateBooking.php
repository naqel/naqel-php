<?php

namespace Naqel\Methods;

use Naqel\Models\BookingShipmentDetail;
use Naqel\Models\ClientInfo;

class CreateBooking extends Method
{
    protected BookingShipmentDetail $bookingShipmentDetail;

    public function attach(BookingShipmentDetail $value): self
    {
        $this->bookingShipmentDetail = $value;
        $this->bookingShipmentDetail->setClientInfo(new ClientInfo());
        $this->params['_BookingShipmentDetail'] = $this->bookingShipmentDetail;

        return $this;
    }

    public function getWaybillNo(): int
    {
        return $this->CreateBookingResult->WaybillNo;
    }

    public function getBookingRefNo(): string
    {
        return $this->CreateBookingResult->BookingRefNo;
    }
}
