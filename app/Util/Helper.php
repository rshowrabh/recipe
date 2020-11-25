<?php

namespace App\Util;

class Helper
{

    /**
     * @param array $array
     *
     * @return array
     */
    public static function fillArrayWithEmptyStringWhenNull($array = [])
    {
        foreach ($array as $key => $value) {
            if ($value == null) {
                $array[$key] = '';
            }
        }

        return $array;
    }
}