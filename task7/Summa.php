<?php

class Summa
{
    public function number( string $a) :int
    {
        // получаем сумму цифр числа
        // доступ к каждой цифре числа можно получить через оператор доступа элементов массива
        for ($i = 0; $i < strlen($a); $i++) {
            $sum += $a[$i];
        }
        return  $sum;
    }
}


$sum = new Summa();
echo $sum->number('12341');