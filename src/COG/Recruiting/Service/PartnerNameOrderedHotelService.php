<?php

namespace COG\Recruiting\Service;

use COG\Recruiting\Interfaces\PartnerServiceInterface;

class PartnerNameOrderedHotelService extends UnorderedHotelService
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

        usort($partnerResults, function ($firstHotel, $nextHotel) {
            // We perform an Case comparison of the FIRST partner after SORTING the partners by name
            return strcmp(
                $this->sortPartners($firstHotel->partners)[0]->name,
                $this->sortPartners($nextHotel->partners)[0]->name
            );
        });

        return $partnerResults;
    }

    /**
     * Sorts the Partner by a PROPERTY
     *
     * @param array $partners
     * @param string $property
     * @return array
     */
    protected function sortPartners(array &$partners, $property = 'name')
    {
        usort($partners, function ($firstPartner, $nextPartner) use ($property) {
            return strcmp($firstPartner->{$property}, $nextPartner->{$property}); // Returns either 1, -1 or 0
        });

        return $partners;
    }
}
