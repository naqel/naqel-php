<?php

namespace Naqel\Models;

use DateTime;

class CommercialInvoice extends Model
{
    // Mandatory Elements
    public array $CommercialInvoiceDetailList;
    public string $RefNo;
    public string $InvoiceNo;
    public string $InvoiceDate;
    public string $Consignee;
    public string $ConsigneeAddress;
    public float $TotalCost;
    public string $CurrencyCode;

    // Optional Elements
    public string $ConsigneeEmail;
    public string $MobileNo;
    public string $Phone;

    public function getCommercialInvoiceDetail(): array
    {
        return $this->CommercialInvoiceDetailList;
    }

    public function addCommercialInvoiceDetail(CommercialInvoiceDetail $CommercialInvoiceDetailList): CommercialInvoice
    {
        $this->CommercialInvoiceDetailList[] = $CommercialInvoiceDetailList;

        return $this;
    }

    public function getRefNo(): string
    {
        return $this->RefNo;
    }

    public function setRefNo(string $RefNo): CommercialInvoice
    {
        $this->RefNo = $RefNo;

        return $this;
    }

    public function getInvoiceNo(): string
    {
        return $this->InvoiceNo;
    }

    public function setInvoiceNo(string $InvoiceNo): CommercialInvoice
    {
        $this->InvoiceNo = $InvoiceNo;

        return $this;
    }

    public function getInvoiceDate(): string
    {
        return $this->InvoiceDate;
    }

    public function setInvoiceDate(DateTime $InvoiceDate): CommercialInvoice
    {
        $this->InvoiceDate = $InvoiceDate->format('Y-m-d');

        return $this;
    }

    public function getConsignee(): string
    {
        return $this->Consignee;
    }

    public function setConsignee(string $Consignee): CommercialInvoice
    {
        $this->Consignee = $Consignee;

        return $this;
    }

    public function getConsigneeAddress(): string
    {
        return $this->ConsigneeAddress;
    }

    public function setConsigneeAddress(string $ConsigneeAddress): CommercialInvoice
    {
        $this->ConsigneeAddress = $ConsigneeAddress;

        return $this;
    }

    public function getTotalCost(): float
    {
        return $this->TotalCost;
    }

    public function setTotalCost(float $TotalCost): CommercialInvoice
    {
        $this->TotalCost = $TotalCost;

        return $this;
    }

    public function getCurrencyCode(): string
    {
        return $this->CurrencyCode;
    }

    public function setCurrencyCode(string $CurrencyCode): CommercialInvoice
    {
        $this->CurrencyCode = $CurrencyCode;

        return $this;
    }

    public function getConsigneeEmail(): string
    {
        return $this->ConsigneeEmail;
    }

    public function setConsigneeEmail(string $ConsigneeEmail): CommercialInvoice
    {
        $this->ConsigneeEmail = $ConsigneeEmail;

        return $this;
    }

    public function getMobileNo(): string
    {
        return $this->MobileNo;
    }

    public function setMobileNo(string $MobileNo): CommercialInvoice
    {
        $this->MobileNo = $MobileNo;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->Phone;
    }

    public function setPhone(string $Phone): CommercialInvoice
    {
        $this->Phone = $Phone;

        return $this;
    }
}
