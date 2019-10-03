<?php

namespace COG\Recruiting\Entity;

/**
 * Represents a single hotel in the result.
 *
 * @author vovke
 */
class Hotel
{
    /**
     * Name of the hotel.
     *
     * @var string
     */
    public $name;

    /**
     * Street adr. of the hotel.
     *
     * @var string
     */
    public $adr;

    /**
     * Unsorted list of partners with their corresponding prices.
     *
     * @var Partner[]
     */
    public $partners = array();

    /**
     * Hotel constructor.
     * @param $name
     * @param $adr
     * @param array $partners
     */
    public function __construct($name, $adr, $partners = [])
    {
        $this->name = $name;
        $this->adr = $adr;
        $this->partners = $partners;
    }
}
