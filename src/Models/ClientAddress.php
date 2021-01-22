<?php

namespace Naqel\Models;

class ClientAddress extends Model
{
    // Mandatory Elements
    public string $PhoneNumber;
    public string $FirstAddress;
    public string $CountryCode;
    public string $CityCode;

    // Optional Elements
    public string $Location;
    public string $POBox;
    public string $ZipCode;
    public string $Fax;

    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->PhoneNumber = $phoneNumber;

        return $this;
    }

    public function getFirstAddress(): string
    {
        return $this->FirstAddress;
    }

    public function setFirstAddress(string $firstAddress): self
    {
        $this->FirstAddress = $firstAddress;

        return $this;
    }

    public function getLocation(): string
    {
        return $this->Location;
    }

    public function setLocation(string $location): self
    {
        $this->Location = $location;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->CountryCode = $countryCode;

        return $this;
    }

    public function getCityCode(): string
    {
        return $this->CityCode;
    }

    public function setCityCode(string $cityCode): self
    {
        $this->CityCode = $cityCode;

        return $this;
    }

    public function getPOBox(): string
    {
        return $this->POBox;
    }

    public function setPOBox(string $POBox): self
    {
        $this->POBox = $POBox;

        return $this;
    }

    public function getZipCode(): string
    {
        return $this->ZipCode;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->ZipCode = $zipCode;

        return $this;
    }

    public function getFax(): string
    {
        return $this->Fax;
    }

    public function setFax(string $fax): self
    {
        $this->Fax = $fax;

        return $this;
    }
}
