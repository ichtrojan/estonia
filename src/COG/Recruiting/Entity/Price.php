<?php

namespace COG\Recruiting\Entity;

/**
 * Represents a single price from a search result
 * related to a single partner.
 *
 * @author vovke
 */
class Price
{
    /**
     * Description text for the rate/price
     *
     * @var string
     */
    public $description;

    /**
     * Price in euro
     *
     * @var float
     */
    public $amount;

    /**
     * Arrival date, represented by a DateTime obj
     * which needs to be converted from a string on
     * write of the property.
     *
     * @var \DateTime
     */
    public $fromDate;

    /**
     * Departure date, represented by a DateTime obj
     * which needs to be converted from a string on
     * write of the property
     *
     * @var \DateTime
     */
    public $toDate;

    /**
     * @param array $attributes
     * @return static
     */
    public static function make(array $attributes)
    {
        $price = new static;
        $price->amount = $attributes['amount'];
        $price->description = $attributes['description'];
        $price->fromDate = $attributes['from'];
        $price->toDate = $attributes['to'];

        return $price;
    }
}
