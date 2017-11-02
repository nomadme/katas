<?php

class PalindromeNumber
{


    public function check($number)
    {
        $instance = $number;
        $reversedNumber = 0;

        while ($number !=0)
        {
            $reversedNumber = $reversedNumber * 10 + $number % 10;
            $number = (int)($number / 10);
        }

        if ($reversedNumber == $instance) return $reversedNumber;
    }


}
