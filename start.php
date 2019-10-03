<?php

use COG\Recruiting\HotelServiceFactory;
use COG\Recruiting\Service\PartnerService;
use COG\Recruiting\Service\UnorderedHotelService;

require "vendor/autoload.php";

$hotelService = new UnorderedHotelService(new PartnerService);
$priceOrderedService = HotelServiceFactory::getPriceOrderedHotelService();
$partnerNameOrderedService = HotelServiceFactory::getPartnerNameOrderedHotelService();

# Task 1
print_r($hotelService->getHotelsForCity("Düsseldorf"));

# Task 2
print_r($priceOrderedService->getHotelsForCity("Düsseldorf"));

# Task 3
print_r($partnerNameOrderedService->getHotelsForCity("Düsseldorf"));
