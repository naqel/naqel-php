<?php

namespace Naqel\Models;

class ManifestShipment extends Model
{
    // Mandatory Elements
    public ClientInfo $ClientInfo;
    public ConsigneeInfo $ConsigneeInfo;
    public int $BillingType;
    public int $PicesCount;
    public float $Weight;
    public int $LoadTypeID;

    // Mandatory if `DeclareValue` > 0
    public $CommercialInvoice;
    public int $CurrenyID;

    // Optional Elements
    public $Latitude;
    public $Longitude;
    public string $DeliveryInstruction;
    public float $CODCharge;
    public float $DeclareValue;
    public string $GoodDesc;
    public bool $IsInsurance;
    public float $InsuredValue;
    public string $RefNo;
    public bool $GeneratePiecesBarCodes;
    public bool $CreateBooking;
    public float $CustomDutyAmount;
    public float $GoodsVATAmount;
    public bool $IsCustomDutyPayByConsignee;
    public string $Reference1;
    public string $Reference2;

    public function getClientInfo(): ClientInfo
    {
        return $this->ClientInfo;
    }

    public function getConsigneeInfo(): ConsigneeInfo
    {
        return $this->ConsigneeInfo;
    }

    /**
     * @return mixed
     */
    public function getCommercialInvoice()
    {
        return $this->CommercialInvoice;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    public function getBillingType(): int
    {
        return $this->BillingType;
    }

    public function getPiecesCount(): int
    {
        return $this->PicesCount;
    }

    public function getWeight(): float
    {
        return $this->Weight;
    }

    public function getDeliveryInstruction(): string
    {
        return $this->DeliveryInstruction;
    }

    public function getCODCharge(): float
    {
        return $this->CODCharge;
    }

    public function getLoadTypeID(): int
    {
        return $this->LoadTypeID;
    }

    public function getDeclareValue(): float
    {
        return $this->DeclareValue;
    }

    public function getGoodDesc(): string
    {
        return $this->GoodDesc;
    }

    public function isIsInsurance(): bool
    {
        return $this->IsInsurance;
    }

    public function getInsuredValue(): float
    {
        return $this->InsuredValue;
    }

    public function getRefNo(): string
    {
        return $this->RefNo;
    }

    public function isGeneratePiecesBarCodes(): bool
    {
        return $this->GeneratePiecesBarCodes;
    }

    public function isCreateBooking(): bool
    {
        return $this->CreateBooking;
    }

    public function getCustomDutyAmount(): float
    {
        return $this->CustomDutyAmount;
    }

    public function getGoodsVATAmount(): float
    {
        return $this->GoodsVATAmount;
    }

    public function isIsCustomDutyPayByConsignee(): bool
    {
        return $this->IsCustomDutyPayByConsignee;
    }

    public function getReference1(): string
    {
        return $this->Reference1;
    }

    public function getReference2(): string
    {
        return $this->Reference2;
    }

    public function getCurrencyID(): int
    {
        return $this->CurrenyID;
    }

    public function setClientInfo(ClientInfo $clientInfo): self
    {
        $this->ClientInfo = $clientInfo;

        return $this;
    }

    public function setConsigneeInfo(ConsigneeInfo $consigneeInfo): self
    {
        $this->ConsigneeInfo = $consigneeInfo;

        return $this;
    }

    public function setCommercialInvoice($value): self
    {
        $this->CommercialInvoice = $value;

        return $this;
    }

    public function setLatitude($latitude): self
    {
        $this->Latitude = $latitude;

        return $this;
    }

    public function setLongitude($longitude): self
    {
        $this->Longitude = $longitude;

        return $this;
    }

    public function setBillingType(int $billingType): self
    {
        $this->BillingType = $billingType;

        return $this;
    }

    public function setPiecesCount(int $count): self
    {
        $this->PicesCount = $count;

        return $this;
    }

    public function setWeight(float $weight): self
    {
        $this->Weight = $weight;

        return $this;
    }

    public function setDeliveryInstruction(string $deliveryInstruction): self
    {
        $this->DeliveryInstruction = $deliveryInstruction;

        return $this;
    }

    public function setCODCharge(float $CODCharge): self
    {
        $this->CODCharge = $CODCharge;

        return $this;
    }

    public function setLoadTypeID(int $loadTypeId): self
    {
        $this->LoadTypeID = $loadTypeId;

        return $this;
    }

    public function setDeclareValue(float $declaredValue): self
    {
        $this->DeclareValue = $declaredValue;

        return $this;
    }

    public function setGoodDesc(string $goodDesc): self
    {
        $this->GoodDesc = $goodDesc;

        return $this;
    }

    public function setIsInsurance(bool $isInsurance): self
    {
        $this->IsInsurance = $isInsurance;

        return $this;
    }

    public function setInsuredValue(float $insuredValue): self
    {
        $this->InsuredValue = $insuredValue;

        return $this;
    }

    public function setRefNo(string $refNo): self
    {
        $this->RefNo = $refNo;

        return $this;
    }

    public function setGeneratePiecesBarCodes(bool $generatePiecesBarCodes): self
    {
        $this->GeneratePiecesBarCodes = $generatePiecesBarCodes;

        return $this;
    }

    public function setCreateBooking(bool $createBooking): self
    {
        $this->CreateBooking = $createBooking;

        return $this;
    }

    public function setCustomDutyAmount(float $customDutyAmount): self
    {
        $this->CustomDutyAmount = $customDutyAmount;

        return $this;
    }

    public function setGoodsVATAmount(float $goodsVATAmount): self
    {
        $this->GoodsVATAmount = $goodsVATAmount;

        return $this;
    }

    public function setIsCustomDutyPayByConsignee(bool $isCustomDutyPayByConsignee): self
    {
        $this->IsCustomDutyPayByConsignee = $isCustomDutyPayByConsignee;

        return $this;
    }

    public function setReference1(string $reference1): self
    {
        $this->Reference1 = $reference1;

        return $this;
    }

    public function setReference2(string $reference2): self
    {
        $this->Reference2 = $reference2;

        return $this;
    }

    public function setCurrencyID(int $currencyId): self
    {
        $this->CurrenyID = $currencyId;

        return $this;
    }
}
