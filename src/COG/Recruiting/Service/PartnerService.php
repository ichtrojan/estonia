<?php

namespace COG\Recruiting\Service;

use COG\Recruiting\Entity\Hotel;
use COG\Recruiting\Entity\Partner;
use COG\Recruiting\Entity\Price;
use COG\Recruiting\Validators\URLValidator;

class PartnerService implements PartnerServiceInterface
{
    /**
     * This method should read from a datasource (JSON in our case)
     * and return an unsorted list of hotels found in the datasource.
     *
     * @param integer $cityId
     *
     * @return \COG\Recruiting\Entity\Hotel[]
     */
    public function getResultForCityId($cityId)
    {
        $results = $this->loadHotelResultsForCity($cityId);
        $hotels = $this->createHotelEntitiesFromHotels(array_values($results['hotels']));

        print_r($hotels);
    }

    protected function loadHotelResultsForCity($cityID)
    {
        return json_decode(file_get_contents(__DIR__ . "/../../../../data/15475.json"), true);
    }

    protected function createPriceEntitiesFromPrices(array $prices): array
    {
        return array_map(function ($attributes) {
            return Price::make($attributes);
        }, $prices);
    }

    protected function createHotelEntitiesFromHotels(array $hotels): array
    {
        return array_map(function ($hotel) {
            $partners = $this->createPartnerEntitiesFromPartners(array_values($hotel['partners']));
            return new Hotel($hotel['name'], $hotel['adr'], $partners);
        }, $hotels);
    }

    protected function createPartnerEntitiesFromPartners(array $partners): array
    {
        return $partners = array_map(function ($partner) {

            $prices = $this->createPriceEntitiesFromPrices(array_values($partner['prices']));

            $urlValidator = new URLValidator;

            $urlValidator->validate($partner['url']);

            return new Partner($partner['name'], $partner['url'], $prices);
        }, $partners);
    }
}
