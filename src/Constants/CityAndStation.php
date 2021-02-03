<?php

namespace Naqel\Constants;

use Illuminate\Support\Collection;

class CityAndStation
{
    public static Collection $json;
    protected string $cityCode;
    protected string $cityName;
    protected int $stationId;
    protected string $stationCode;
    protected string $countryCode;
    protected array $record;

    public static function load(string $searchValue = '', string $searchKey = 'CityName'): self
    {
        if (! isset(self::$json)) {
            self::$json = new Collection(json_decode(
                file_get_contents(__DIR__.'/../cities_stations.json'),
                true
            ));
        }

        if (! empty($searchValue)) {
            return (new self())->searchBy($searchKey, $searchValue);
        }

        return new self();
    }

    public function searchByCityCode(int $cityCode): self
    {
        return $this->searchBy('CityCode', $cityCode);
    }

    public function searchByCityName(string $cityName): self
    {
        return $this->searchBy('CityName', $cityName);
    }

    public function searchByStationId(int $stationId): self
    {
        return $this->searchBy('StationId', $stationId);
    }

    public function searchByStationCode(string $stationCode): self
    {
        return $this->searchBy('StationCode', $stationCode);
    }

    public function getCityCode(): string
    {
        return $this->record['CityCode'];
    }

    public function getCityName(): string
    {
        return $this->record['CityName'];
    }

    public function getStationId(): int
    {
        return $this->record['StationId'];
    }

    public function getStationCode(): string
    {
        return $this->record['StationCode'];
    }

    public function getCountryCode(): string
    {
        return $this->record['CountryCode'];
    }

    protected function searchBy($key, $value): self
    {
        $this->record = self::$json->get(self::$json->search(function ($item) use ($key, $value) {
            return strtoupper($item[$key]) == strtoupper($value);
        }));

        return $this;
    }
}
