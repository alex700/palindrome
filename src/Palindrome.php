<?php

namespace PHPUtils;

class Palindrome
{
    public static function check($string): bool
    {
        $stringArr = str_split($string);

        $counter = [];
        foreach ($stringArr as $char) {
            if(isset($counter[$char])) {
                $counter[$char]++;
            } else {
                $counter[$char] = 1;
            }
        }

        // remove all even items because they have its pair and always
        // will be a palindrome
        // result is the middle of the string that can be palindrome or not (like "OOO")
        $filtered = array_filter($counter, function ($value) {
            return $value%2;
        });

        $middleNumbers = count($filtered);

        // in case middle is symmetric there will be just one element in the middle
        return ($middleNumbers == 0 || $middleNumbers ==1);
    }
}

