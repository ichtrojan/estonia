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
}