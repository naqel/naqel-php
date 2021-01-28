<?php

namespace Naqel\Models;

class CommercialInvoiceDetail extends Model
{
    // Mandatory Elements
    public int $Quantity;
    public string $UnitType;
    public string $CountryofManufacture;
    public string $Description;
    public float $UnitCost;
    public string $CustomsCommodityCode;
    public string $Currency;

    // Optional Elements
    public string $ChineseDescription;

    public function getQuantity(): int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): CommercialInvoiceDetail
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getUnitType(): string
    {
        return $this->UnitType;
    }

    public function setUnitType(string $UnitType): CommercialInvoiceDetail
    {
        $this->UnitType = $UnitType;

        return $this;
    }

    public function getCountryofManufacture(): string
    {
        return $this->CountryofManufacture;
    }

    public function setCountryofManufacture(string $CountryofManufacture): CommercialInvoiceDetail
    {
        $this->CountryofManufacture = $CountryofManufacture;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): CommercialInvoiceDetail
    {
        $this->Description = $Description;

        return $this;
    }

    public function getUnitCost(): float
    {
        return $this->UnitCost;
    }

    public function setUnitCost(float $UnitCost): CommercialInvoiceDetail
    {
        $this->UnitCost = $UnitCost;

        return $this;
    }

    public function getCustomsCommodityCode(): string
    {
        return $this->CustomsCommodityCode;
    }

    public function setCustomsCommodityCode(string $CustomsCommodityCode): CommercialInvoiceDetail
    {
        $this->CustomsCommodityCode = $CustomsCommodityCode;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->Currency;
    }

    public function setCurrency(string $Currency): CommercialInvoiceDetail
    {
        $this->Currency = $Currency;

        return $this;
    }

    public function getChineseDescription(): string
    {
        return $this->ChineseDescription;
    }

    public function setChineseDescription(string $ChineseDescription): CommercialInvoiceDetail
    {
        $this->ChineseDescription = $ChineseDescription;

        return $this;
    }
}
