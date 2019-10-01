<?php

namespace COG\Recruiting;

use COG\Recruiting\Service\HotelServiceInterface;
use COG\Recruiting\Service\PartnerNameOrderedHotelService;
use COG\Recruiting\Service\PartnerService;
use COG\Recruiting\Service\PriceOrderedHotelService;

class HotelServiceFactory
{
    public static function getPriceOrderedHotelService(): HotelServiceInterface
    {
        return new PriceOrderedHotelService(new PartnerService);
    }

    public static function getPartnerNameOrderedHotelService(): HotelServiceInterface
    {
        return new PartnerNameOrderedHotelService(new PartnerService);
    }
}
