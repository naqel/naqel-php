<?php

namespace Naqel\Models;

class ClientContact extends Model
{
    // Mandatory Elements
    public string $Name;
    public string $PhoneNumber;

    // Optional Elements
    public string $Email;
    public string $MobileNo;

    public function getName(): string
    {
        return $this->Name;
    }

    public function setName(string $name): self
    {
        $this->Name = $name;

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

    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->PhoneNumber = $phoneNumber;

        return $this;
    }

    public function getMobileNo(): string
    {
        return $this->MobileNo;
    }

    public function setMobileNo(string $mobileNo): self
    {
        $this->MobileNo = $mobileNo;

        return $this;
    }
}
