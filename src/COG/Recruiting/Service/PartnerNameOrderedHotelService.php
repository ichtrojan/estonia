<?php

namespace COG\Recruiting\Service;

use COG\Recruiting\Interfaces\PartnerServiceInterface;

class PartnerNameOrderedHotelService extends UnorderedHotelService
{
    public function __construct(PartnerServiceInterface $partnerService)
    {
        parent::__construct($partnerService);
    }

    /**
     * @param string $cityName Name of the city to search for.
     *
     * @return \COG\Recruiting\Entity\Hotel[]
     * @throws \InvalidArgumentException if city name is unknown.
     */
    public function getHotelsForCity($cityName)
    {
        $partnerResults = parent::getHotelsForCity($cityName);
        // Logic to Order Hotels by Partner Name will now go here

        return $partnerResults;
    }
}
