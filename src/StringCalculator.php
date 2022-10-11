<?php declare(strict_types=1);

namespace kata;

final class StringCalculator {
    public function add($numbers) : int
    {
        if(is_null($numbers) || empty($numbers)) return 0;

        $split_numbers = preg_split ("/\,/", $numbers);
        $number_array = array_map('intval', $split_numbers);

        $sumFunc = fn($x, $y) => $x + $y;
        $sum = array_reduce($number_array, $sumFunc);


        return $sum;
    }
}