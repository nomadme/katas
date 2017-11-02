<?php

class FactorialNumber
{
    public function findFactor($number)
    {
        $factorial = 1;
        $number = $number;

        for ($x=$number; $x>=1; $x--)
        {
            $factorial = $factorial * $x;
        }

        return $factorial;
    }
}
