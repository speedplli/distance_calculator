<?php

namespace Calculation\Algorithms;

interface AlgorithmInterface
{
    /**
     * This method is to add proper data to the calculations
     *
     * @param $string_a
     * @param $string_b
     *
     * @return void
     */
    public function loadData($string_a, $string_b);

    /**
     * This method is for calculations only
     *
     * @return integer
     */
    public function calculate();
}
