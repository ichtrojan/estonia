<?php

namespace COG\Recruiting\Entity;

/**
 * Represents a single partner from a search result.
 *
 * @author vovke
 */
class Partner
{
    /**
     * Name of the partner
     * @var string
     */
    public $name;

    /**
     * Url of the partner's homepage (root link)
     *
     * @var string
     */
    public $homepage;

    /**
     * Unsorted list of prices received from the
     * actual search query.
     *
     * @var Price[]
     */
    public $prices = array();

    /**
     * Partner constructor.
     * @param $name
     * @param $homepage
     * @param array $prices
     */
    public function __construct($name, $homepage, $prices = [])
    {
        $this->name = $name;
        $this->homepage = $homepage;
        $this->prices = $prices;
    }
}
