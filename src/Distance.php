<?php

namespace Calculation;

use Calculation\Algorithms\AlgorithmInterface;

class Distance
{
    /**
     * @var AlgorithmInterface
     */
    protected $algorithm;

    /**
     * This constructor loads the algorithm selected by the end user
     *
     * @param AlgorithmInterface $algorithm_used
     */
    public function __construct(AlgorithmInterface $algorithm_used)
    {
        $this->algorithm = $algorithm_used;
    }

    /**
     * This method sets the data for the selected algorithm
     *
     * @param $string_a
     * @param $string_b
     *
     * @return $this
     */
    public function setData($string_a, $string_b)
    {
        $this->algorithm->loadData($string_a, $string_b);
        return $this;
    }

    /**
     * This method returns the calculated data
     *
     * @return int
     */
    public function distance()
    {
        return $this->algorithm->calculate();
    }
}
