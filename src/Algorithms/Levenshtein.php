<?php

namespace Calculation\Algorithms;

class Levenshtein implements AlgorithmInterface
{
    private $_string_a;
    private $_string_b;

    public function loadData($string_a, $string_b)
    {
        $this->_string_a = $string_a;
        $this->_string_b = $string_b;
    }

    public function calculate()
    {
        $string_a_length = strlen($this->_string_a);
        $string_b_length = strlen($this->_string_b);
        $matrix = [];
        for ($string_a_index = 1; $string_a_index <= $string_a_length; $string_a_index++) {
            for ($string_b_index = 1; $string_b_index <= $string_b_length; $string_b_index++) {
                $cost = ($this->_string_b[$string_b_index - 1] === $this->_string_a[$string_a_index - 1]) ? 0 : 1;
                $matrix[$string_a_index][$string_b_index] = min($matrix[$string_a_index - 1][$string_b_index] + 1, $matrix[$string_a_index][$string_b_index - 1] + 1, $matrix[$string_a_index - 1][$string_b_index - 1] + $cost);
            }
        }

        return $matrix[$string_a_length][$string_b_length];
    }
}
