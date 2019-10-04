<?php

namespace COG\Recruiting\Service;

class PriceOrderedHotelService extends UnorderedHotelService
{
    /**
     * @param string $cityName Name of the city to search for.
     *
     * @return \COG\Recruiting\Entity\Hotel[]
     * @throws \InvalidArgumentException if city name is unknown.
     */
    public function getHotelsForCity($cityName)
    {
        $partnerResults = parent::getHotelsForCity($cityName);

        usort($partnerResults, function ($first, $next) {
            return
                $this->sortPartnersByTheirPrices($first->partners)[0]->prices[0]->amount
            <=>
                $this->sortPartnersByTheirPrices($next->partners)[0]->prices[0]->amount;
        });

        return $partnerResults;
    }

    /**
     * Sort Partners by Prices
     *
     * @param array $partners
     * @return array
     */
    protected function sortPartnersByTheirPrices(array &$partners)
    {
        if (count($partners) == 1) {
            end($partners)->prices = $this->sortPrices($partners[0]->prices);

            return $partners;
        }

        usort($partners, function ($firstPartner, $secondPartner) {
            return
                $this->sortPrices($firstPartner->prices)[0]->amount
                <=> // Spaceship Operator: This is an Equivalent of ($a > $b) ? 1 : (($a < $b) ? -1 : 0)
                $this->sortPrices($secondPartner->prices)[0]->amount;
        });

        return $partners;
    }

    /**
     * Sorts Prices by a PROPERTY
     *
     * @param array $prices
     * @param string $property
     * @return array
     */
    protected function sortPrices(array &$prices, $property = 'amount')
    {
        usort($prices, function ($firstPrice, $nextPrice) use ($property) {
            return $firstPrice->{$property} <=> $nextPrice->{$property};
        });

        return $prices;
    }
}
