<?php

namespace COG\Recruiting\Service;

use COG\Recruiting\Interfaces\PartnerServiceInterface;
use COG\Recruiting\Interfaces\HotelServiceInterface;


/**
 * This class is an (unfinished) example implementation of an unordered hotel service.
 *
 * @author vovke
 */
class UnorderedHotelService implements HotelServiceInterface
{

    /**
     * @var PartnerServiceInterface
     */
    private $partnerService;

    /**
     * Maps from city name to the id for the partner service.
     *
     * @var array
     */
    private $cityToIdMapping = array(
        "Düsseldorf" => 15475
    );

    /**
     * @param PartnerServiceInterface $partnerService
     */
    public function __construct(PartnerServiceInterface $partnerService)
    {
       $this->partnerService = $partnerService;
    }

    /**
     * @inherited
     */
    public function getHotelsForCity($cityName)
    {
        if (!isset($this->cityToIdMapping[$cityName]))
        {
            throw new \InvalidArgumentException(sprintf('Given city name [%s] is not mapped.', $cityName));
        }

        $cityId = $this->cityToIdMapping[$cityName];

        $partnerResults = $this->partnerService->getResultForCityId($cityId);

        return $partnerResults;
    }
}
