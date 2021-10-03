<?php

namespace Calculation\Algorithms;

class Hamming implements AlgorithmInterface
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
        $number_of_changes = 0;
        if ($string_a_length > $string_b_length) {
            $this->_string_b = str_pad($this->_string_b, $string_a_length);
        } elseif ($string_b_length > $string_a_length) {
            $this->_string_a = str_pad($this->_string_a, $string_b_length);
        }

        $string_length = strlen($this->_string_a);
        for ($i = 0; $i < $string_length; $i++) {
            if ($this->_string_a[$i] !== $this->_string_b[$i]) {
                $number_of_changes++;
            }
        }

        return $number_of_changes;
    }

}
