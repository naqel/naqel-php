# naqel-php

[![Build Status](https://travis-ci.com/naqel/naqel-php.png?branch=main)](https://travis-ci.com/naqel/naqel-php)
[![Packagist](https://img.shields.io/packagist/v/naqel/sdk.svg)](https://packagist.org/packages/naqel/sdk)
[![Packagist](https://img.shields.io/packagist/dt/naqel/sdk.svg)](https://packagist.org/packages/naqel/sdk)

## Documentation

The documentation for the Naqel API can be found [here][apidocs].

### Supported PHP Versions

This library supports the following PHP implementations:

* PHP 7.4
* PHP 8.0

## Installation

You can install **naqel-php** via a composer or by downloading the source.

### Via Composer:

**naqel-php** is available on Packagist as the
[`naqel/sdk`](https://packagist.org/packages/naqel/sdk) package:

```
composer require naqel/sdk
```

## Quickstart:

Set the configurations with your credential and information:
```php
$naqel = new \Naqel\Naqel([
    'use_sandbox' => true,
    'client_id'   => '[YOUR_CLIENT_ID]',
    'password'    => '[YOUR_CLIENT_PASSWORD]',
    'version'     => '9.0',
]);

// Set your address
$clientAddress = (new \Naqel\Models\ClientAddress())
    ->setPhoneNumber('0555555555')
    ->setFirstAddress('King Abdulaziz Street')
    ->setCountryCode('KSA')
    ->setCityCode('RUH');

// Set your contact
$clientContact = (new \Naqel\Models\ClientContact())
    ->setName('Mohammad')
    ->setPhoneNumber('05xxxxxxxx');

// Attach both address and contact to Naqel instance
$naqel->setClientAddress($clientAddress);
$naqel->setClientContact($clientContact);
```

Set Consignee Info:
```php
$consigneeInfo = (new \Naqel\Models\ConsigneeInfo())
    ->setConsigneeName('Abdullah')
    ->setPhoneNumber('05xxxxxxxx')
    ->setAddress('King Salman Street')
    ->setCountryCode('KSA')
    ->setCityCode('RUH');
```

Set Manifest Shipment:
```php
$manifestShipment = (new \Naqel\Models\ManifestShipment())
    ->setConsigneeInfo($consigneeInfo)
    ->setBillingType(\Naqel\Constants\BillingType::ON_ACCOUNT)
    ->setLoadTypeID(\Naqel\Constants\LoadType::NON_DOCUMENT)
    ->setPiecesCount(1)
    ->setWeight(1.0);
```

Create a New Waybill w/ Manifest:
```php
$waybill = $naqel->createWaybill()->attachManifest($manifestShipment);
```

Get the waybill number:
```php
$waybillNumber = $waybill->getWaybillNumber();
```

Get the waybill sticker as a PDF content:
```php
$sticker = $waybill->getWaybillSticker(
    \Naqel\Constants\StickerSize::FourMFourInches
);
```

Or you can get a sticker by a waybill number:
```php
$sticker = $naqel->getWaybillSticker()
    ->setWaybillNo($waybill->getWaybillNumber())
    ->setStickerSize(\Naqel\Constants\StickerSize::FourMFourInches)
    ->getPDF();
```

## Versioning

`naqel-php` uses a [SemVer](https://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/naqel/naqel-php/tags).


## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

[apidocs]: https://infotrack.naqelexpress.com/NaqelAPIServices/NaqelAPI/9.0/XMLShippingService.asmx
