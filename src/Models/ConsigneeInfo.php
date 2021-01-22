<?php

namespace Naqel\Models;

class ConsigneeInfo extends Model
{
    // Mandatory Elements
    public string $ConsigneeName;
    public string $PhoneNumber;
    public string $Address;
    public string $CountryCode;
    public string $CityCode;

    // Optional Elements
    public string $Email;
    public string $Mobile;
    public string $Fax;
    public string $Near;
    public string $ConsigneeNationalID;

    public function getConsigneeName(): string
    {
        return $this->ConsigneeName;
    }

    public function setConsigneeName(string $consigneeName): self
    {
        $this->ConsigneeName = $consigneeName;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->PhoneNumber = $phoneNumber;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function setEmail(string $email): self
    {
        $this->Email = $email;

        return $this;
    }

    public function getMobile(): string
    {
        return $this->Mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->Mobile = $mobile;

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

    public function getAddress(): string
    {
        return $this->Address;
    }

    public function setAddress(string $address): self
    {
        $this->Address = $address;

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

    public function getNear(): string
    {
        return $this->Near;
    }

    public function setNear(string $near): self
    {
        $this->Near = $near;

        return $this;
    }

    public function getConsigneeNationalID(): string
    {
        return $this->ConsigneeNationalID;
    }

    public function setConsigneeNationalID(string $consigneeNationalID): self
    {
        $this->ConsigneeNationalID = $consigneeNationalID;

        return $this;
    }
}
