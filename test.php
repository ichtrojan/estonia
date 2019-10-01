<?php

use COG\Recruiting\HotelServiceFactory;
use COG\Recruiting\Service\PartnerService;
use COG\Recruiting\Service\UnorderedHotelService;

require "vendor/autoload.php";

$hotelService = new UnorderedHotelService(new PartnerService);
$priceOrderedService = HotelServiceFactory::getPriceOrderedHotelService();
$partnerNameOrderedService = HotelServiceFactory::getPartnerNameOrderedHotelService();

print_r($hotelService->getHotelsForCity("Düsseldorf"));
print_r($priceOrderedService->getHotelsForCity("Düsseldorf"));
print_r($partnerNameOrderedService->getHotelsForCity("Düsseldorf"));
