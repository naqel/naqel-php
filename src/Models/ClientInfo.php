<?php

namespace Naqel\Models;

use Naqel\Naqel;

class ClientInfo extends Model
{
    // Mandatory Elements
    public int $ClientID;
    public string $Password;
    public string $Version;
    public ClientAddress $ClientAddress;
    public ClientContact $ClientContact;

    public function __construct()
    {
        parent::__construct();

        $this->ClientID = (int) Naqel::config('client_id');
        $this->Password = (string) Naqel::config('password');
        $this->Version = (string) Naqel::config('version');

        $this->setClientAddress(Naqel::getClientAddress());
        $this->setClientContact(Naqel::getClientContact());
    }

    public function getClientID(): int
    {
        return $this->ClientID;
    }

    public function setClientID(int $clientId): ClientInfo
    {
        $this->ClientID = $clientId;

        return $this;
    }

    public function getClientPassword(): string
    {
        return $this->Password;
    }

    public function setClientPassword(string $password): ClientInfo
    {
        $this->Password = $password;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->Version;
    }

    public function setVersion(string $version): ClientInfo
    {
        $this->Version = $version;

        return $this;
    }

    public function getClientAddress(): ClientAddress
    {
        return $this->ClientAddress;
    }

    public function setClientAddress(ClientAddress $clientAddress): ClientInfo
    {
        $this->ClientAddress = $clientAddress;

        return $this;
    }

    public function getClientContact(): ClientContact
    {
        return $this->ClientContact;
    }

    public function setClientContact(ClientContact $clientContact): ClientInfo
    {
        $this->ClientContact = $clientContact;

        return $this;
    }
}
