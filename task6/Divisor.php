<?php

class Divisor
{
    public function number( int $start, int $end, int $divide) :int
    {
        for ($i = $start; $i <= $end; $i++) {
            if (fmod($i, $divide) == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }
}




$sum = new Divisor();
echo $sum->number(40,80,5);