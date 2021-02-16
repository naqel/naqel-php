<?php

namespace Naqel\Models;

use DateTime;

class BookingShipmentDetail extends Model
{
    // Mandatory Elements
    public ClientInfo $ClientInfo;
    public int $BillingType;
    public float $Weight;
    public int $LoadTypeID;
    public string $PickUpReqDateTime;
    public int $PicesCount;
    public string $PickUpPoint;
    public int $OriginStationID;
    public int $DestinationStationID;
    public string $OfficeUpTo;
    public string $ContactPerson;
    public string $ContactNumber;

    // Optional Elements
    public string $SpecialInstruction;

    public function getClientInfo(): ClientInfo
    {
        return $this->ClientInfo;
    }

    public function setClientInfo(ClientInfo $clientInfo): self
    {
        $this->ClientInfo = $clientInfo;

        return $this;
    }

    public function getBillingType(): int
    {
        return $this->BillingType;
    }

    public function setBillingType(int $billingType): self
    {
        $this->BillingType = $billingType;

        return $this;
    }

    public function getWeight(): float
    {
        return $this->Weight;
    }

    public function setWeight(float $weight): self
    {
        $this->Weight = $weight;

        return $this;
    }

    public function getLoadTypeID(): int
    {
        return $this->LoadTypeID;
    }

    public function setLoadTypeID(int $loadTypeID): self
    {
        $this->LoadTypeID = $loadTypeID;

        return $this;
    }

    public function getPickUpReqDateTime(): string
    {
        return $this->PickUpReqDateTime;
    }

    public function setPickUpReqDateTime(DateTime $pickUpReqDateTime): self
    {
        $this->PickUpReqDateTime = $pickUpReqDateTime->format(DateTime::ATOM);

        return $this;
    }

    public function getPiecesCount(): int
    {
        return $this->PicesCount;
    }

    public function setPiecesCount(int $piecesCount): self
    {
        $this->PicesCount = $piecesCount;

        return $this;
    }

    public function getPickUpPoint(): string
    {
        return $this->PickUpPoint;
    }

    public function setPickUpPoint(string $pickUpPoint): self
    {
        $this->PickUpPoint = $pickUpPoint;

        return $this;
    }

    public function getOriginStationID(): int
    {
        return $this->OriginStationID;
    }

    public function setOriginStationID(int $originStationID): self
    {
        $this->OriginStationID = $originStationID;

        return $this;
    }

    public function getDestinationStationID(): int
    {
        return $this->DestinationStationID;
    }

    public function setDestinationStationID(int $destinationStationID): self
    {
        $this->DestinationStationID = $destinationStationID;

        return $this;
    }

    public function getOfficeUpTo(): string
    {
        return $this->OfficeUpTo;
    }

    public function setOfficeUpTo(DateTime $officeUpTo): self
    {
        $this->OfficeUpTo = $officeUpTo->format(DateTime::ATOM);

        return $this;
    }

    public function getContactPerson(): string
    {
        return $this->ContactPerson;
    }

    public function setContactPerson(string $contactPerson): self
    {
        $this->ContactPerson = $contactPerson;

        return $this;
    }

    public function getContactNumber(): string
    {
        return $this->ContactNumber;
    }

    public function setContactNumber(string $contactNumber): self
    {
        $this->ContactNumber = $contactNumber;

        return $this;
    }

    public function getSpecialInstruction(): string
    {
        return $this->SpecialInstruction;
    }

    public function setSpecialInstruction(string $specialInstruction): self
    {
        $this->SpecialInstruction = $specialInstruction;

        return $this;
    }
}
